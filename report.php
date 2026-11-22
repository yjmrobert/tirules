<?php
// Report a problem: a plain HTML form that opens a GitHub issue through the API, so
// reporters don't need a GitHub account. No JavaScript.
// Needs the GITHUB_ISSUES_TOKEN environment variable: a fine-grained token with
// Issues read/write on dangothemango/tirules only. Without it (or if GitHub is down),
// the page offers GitHub's own issue form, prefilled, instead.
$page_noindex = true;

const REPORT_REPO = 'dangothemango/tirules';
const REPORT_KINDS = [
    'wrong'     => 'A rule or note is wrong',
    'missing'   => 'A note is missing or needs more detail',
    'confusing' => 'Something is confusing',
    'typo'      => 'Typo or formatting',
    'link'      => 'Broken link or page',
    'other'     => 'Something else',
];

function report_field(string $name, int $max): string
{
    $v = isset($_POST[$name]) && is_string($_POST[$name]) ? $_POST[$name] : '';
    $v = trim(str_replace("\r\n", "\n", $v));
    return mb_substr($v, 0, $max);
}

// Stop GitHub @mentions in reporter text from notifying anyone.
function report_defuse(string $s): string
{
    return preg_replace('/@(?=\w)/u', "@\u{200B}", $s);
}

function report_client_ip(): string
{
    $xff = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    if ($xff !== '') {
        // The load balancer appends the address it saw last.
        $parts = array_map('trim', explode(',', $xff));
        return end($parts);
    }
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

// At most 5 reports per address and 30 site-wide per hour.
function report_rate_ok(): bool
{
    $now = time();
    $dir = sys_get_temp_dir();
    foreach (['ip_' . sha1(report_client_ip()) => 5, 'all' => 30] as $key => $limit) {
        $file = $dir . '/tirules_report_' . $key . '.json';
        $times = is_file($file) ? (json_decode((string) @file_get_contents($file), true) ?: []) : [];
        $times = array_values(array_filter($times, fn($t) => is_int($t) && $t > $now - 3600));
        if (count($times) >= $limit) {
            return false;
        }
        $times[] = $now;
        @file_put_contents($file, json_encode($times), LOCK_EX);
    }
    return true;
}

// The token, from whichever way Elastic Beanstalk exposes environment properties to PHP.
function report_token(): string
{
    $t = getenv('GITHUB_ISSUES_TOKEN') ?: ($_SERVER['GITHUB_ISSUES_TOKEN'] ?? '')
        ?: ($_ENV['GITHUB_ISSUES_TOKEN'] ?? '') ?: (get_cfg_var('GITHUB_ISSUES_TOKEN') ?: '');
    return trim((string) $t);
}

// Why there is no token, for the site owner. Variable names only, never values.
function report_token_diagnosis(): string
{
    $names = array_merge(array_keys(getenv() ?: []), array_keys($_SERVER), array_keys($_ENV));
    $names = array_values(array_unique(array_filter($names, fn($n) => preg_match('/GITHUB|TOKEN/i', (string) $n))));
    return 'GITHUB_ISSUES_TOKEN is not in the PHP environment (set it under Environment properties)'
        . '; variable names PHP can see containing GITHUB or TOKEN: ' . ($names ? implode(', ', $names) : 'none');
}

// Returns [issue number, issue URL] or null. On failure, $reason says why (never the token).
function report_create_issue(string $token, string $title, string $body, ?string &$reason): ?array
{
    $url = 'https://api.github.com/repos/' . REPORT_REPO . '/issues';
    $headers = [
        'Authorization: Bearer ' . $token,
        'Accept: application/vnd.github+json',
        'X-GitHub-Api-Version: 2022-11-28',
        'User-Agent: tirules2-report-form',
        'Content-Type: application/json',
    ];
    $payload = json_encode(['title' => $title, 'body' => $body]);
    $status = 0;
    $resp = false;
    $transport_error = '';
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ]);
        $resp = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        if ($resp === false) {
            $transport_error = 'curl: ' . curl_error($ch);
        }
        curl_close($ch);
    } else {
        $ctx = stream_context_create(['http' => [
            'method' => 'POST',
            'header' => implode("\r\n", $headers),
            'content' => $payload,
            'timeout' => 10,
            'ignore_errors' => true,
        ]]);
        $resp = @file_get_contents($url, false, $ctx);
        foreach ($http_response_header ?? [] as $h) {
            if (preg_match('#^HTTP/\S+\s+(\d{3})#', $h, $m)) {
                $status = (int) $m[1];
            }
        }
        if ($resp === false) {
            $transport_error = 'stream: ' . (error_get_last()['message'] ?? 'request failed')
                . (ini_get('allow_url_fopen') ? '' : ' (allow_url_fopen is off)');
        }
    }
    $data = $resp !== false ? json_decode((string) $resp, true) : null;
    if ($status === 201 && isset($data['number'], $data['html_url'])) {
        return [(int) $data['number'], (string) $data['html_url']];
    }
    $reason = $transport_error !== ''
        ? 'could not reach GitHub (' . $transport_error . ')'
        : 'GitHub answered ' . $status . (isset($data['message']) ? ': ' . $data['message'] : '');
    $reason = str_replace($token, '[token]', $reason);
    error_log('report.php: ' . $reason);
    return null;
}

$page = mb_substr(trim((string) ($_GET['page'] ?? '')), 0, 200);
$kind = 'wrong';
$details = $source = '';
$errors = [];
$result = null;     // [number, url] after a successful report
$fallback = null;   // GitHub issue-form URL when the API can't be used
$reason = null;     // why the API call failed, shown to help the site owner

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $page = report_field('page', 200);
    $kind = array_key_exists($_POST['kind'] ?? '', REPORT_KINDS) ? $_POST['kind'] : 'other';
    $details = report_field('details', 5000);
    $source = report_field('source', 500);
    $bot = report_field('website', 200) !== ''                      // hidden honeypot field
        || (time() - (int) ($_POST['t'] ?? 0)) < 3;                   // submitted too fast

    if (mb_strlen($details) < 10) {
        $errors[] = 'Please describe the problem (at least a sentence).';
    }
    if (!$errors && !$bot && !report_rate_ok()) {
        $errors[] = 'Too many reports from here in the last hour. Please try again later.';
    }

    if (!$errors) {
        $page_url = str_starts_with($page, '/') ? 'https://tirules2.com' . $page : $page;
        $label = $page === '' ? 'site' : (trim(preg_replace('#^(https?://[^/]+)?/#', '', $page), '/') ?: 'home');
        $summary = preg_replace('/\s+/u', ' ', $details);
        $title = '[' . $label . '] ' . REPORT_KINDS[$kind] . ': '
            . (mb_strlen($summary) > 60 ? mb_substr($summary, 0, 57) . '…' : $summary);
        $body = '**Page:** ' . ($page_url !== '' ? $page_url : '(not given)') . "\n"
            . '**Kind:** ' . REPORT_KINDS[$kind] . "\n\n"
            . "**Details**\n\n" . $details . "\n\n"
            . ($source !== '' ? "**Source**\n\n" . $source . "\n\n" : '')
            . '_Sent with the report form on tirules2.com._';
        $title = report_defuse($title);
        $body = report_defuse($body);

        if ($bot) {
            $result = [0, ''];   // pretend it worked; send nothing
        } else {
            $token = report_token();
            if ($token === '') {
                $reason = 'no token: ' . report_token_diagnosis();
                error_log('report.php: ' . $reason);
                $result = null;
            } else {
                $result = report_create_issue($token, $title, $body, $reason);
            }
            if ($result === null) {
                $fallback = 'https://github.com/' . REPORT_REPO . '/issues/new?title='
                    . rawurlencode($title) . '&body=' . rawurlencode($body);
            }
        }
    }
}

$h = fn($s) => htmlspecialchars((string) $s, ENT_QUOTES);
include "prefix.php";
?>
<header><h1>Report a Problem</h1></header>
<article>
<?php if ($result !== null) { ?>
<p>Thank you. Your report has been sent<?php if ($result[0] > 0) { ?> as <a href="<?php echo $h($result[1]); ?>">issue #<?php echo $result[0]; ?></a> on GitHub, where you can follow it<?php } ?>.</p>
<?php if ($page !== '' && str_starts_with($page, '/')) { ?><p><a href="<?php echo $h($page); ?>">Back to the page</a></p><?php } ?>
<?php } elseif ($fallback !== null) { ?>
<p>The report could not be sent from here right now. You can send it on GitHub instead (this needs a GitHub account); your text is already filled in:</p>
<p><a href="<?php echo $h($fallback); ?>" rel="noopener">Open the report on GitHub</a></p>
<?php if ($reason !== null) { ?><p class="report-reason">Technical detail for the site owner: <?php echo $h($reason); ?></p><?php } ?>
<?php } else { ?>
<p>Found a rule that&rsquo;s wrong, a note that&rsquo;s missing, or something confusing? Tell us here. Reports become public issues on <a href="https://github.com/<?php echo REPORT_REPO; ?>/issues">GitHub</a>, so please don&rsquo;t include personal details.</p>
<?php if ($errors) { ?><p class="report-error"><?php echo $h(implode(' ', $errors)); ?></p><?php } ?>
<form class="report" method="post" action="/report">
    <label for="report-page">Page</label>
    <input type="text" id="report-page" name="page" maxlength="200" value="<?php echo $h($page); ?>" placeholder="/R_combat"/>
    <label for="report-kind">What kind of problem?</label>
    <select id="report-kind" name="kind">
<?php foreach (REPORT_KINDS as $k => $v) { ?>
        <option value="<?php echo $k; ?>"<?php echo $k === $kind ? ' selected' : ''; ?>><?php echo $h($v); ?></option>
<?php } ?>
    </select>
    <label for="report-details">What&rsquo;s the problem?</label>
    <textarea id="report-details" name="details" maxlength="5000" required placeholder="Quote the note if you can, and say what should change."><?php echo $h($details); ?></textarea>
    <label for="report-source">Source, if you have one (optional)</label>
    <input type="text" id="report-source" name="source" maxlength="500" value="<?php echo $h($source); ?>" placeholder="e.g. Living Rules Reference 78.4, or a link to a ruling"/>
    <div class="report-trap" aria-hidden="true"><label for="report-website">Leave this empty</label><input type="text" id="report-website" name="website" tabindex="-1" autocomplete="off"/></div>
    <input type="hidden" name="t" value="<?php echo time(); ?>"/>
    <button type="submit">Send report</button>
</form>
<?php } ?>
</article>
<?php include "suffix.php"?>
