<?php
require __DIR__ . '/redirect_php_urls.php';
ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
<meta content="utf-8" http-equiv="encoding"/>
<meta name="author" content="BradleyΣ"/>
<meta name="version" content="v0.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="canonical" href="https://tirules2.com<?php echo htmlspecialchars(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/'); ?>"/>
<?php if (str_ends_with(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '', '/pudding')) { ?>
<meta name="robots" content="noindex, follow"/>
<?php } ?>
<link rel="icon" href="/favicon.png"/>
<link rel="stylesheet" type="text/css" href="/style.css"/>
<?php
include __DIR__ . '/theme.php';
$content = ob_get_clean();
ob_start();
register_shutdown_function(function() use ($content, $theme_toggle_button) {
    $page_content = ob_get_clean();
    
    // Extract the header text
    $page_title = 'Twilight Imperium Rule Help';
    if (preg_match('/<header>(.*?)<\/header>/i', $page_content, $matches)) {
        // Header markup -> plain text: <br> becomes " / ", entities are decoded
        // (htmlspecialchars below re-escapes once), decorative symbols are dropped.
        $text = preg_replace('/<br\s*\/?>/i', ' / ', $matches[1]);
        $text = html_entity_decode(strip_tags($text), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = trim(preg_replace(['/\p{So}/u', '/\s+/u'], ['', ' '], $text));
        $page_title = $text . ' - Twilight Imperium Rules';
    }
    
    // Output the complete page with dynamic title
    echo $content;
    echo '<title>' . htmlspecialchars($page_title) . '</title>';
    echo "\n</head>\n<body>\n";
    echo preg_replace('/<\/header>/i', $theme_toggle_button . '</header>', $page_content, 1);
});
?>
