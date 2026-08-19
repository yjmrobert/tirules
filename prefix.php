<?php
// 301 redirect .php URLs to clean URLs
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$path = parse_url($requestUri, PHP_URL_PATH) ?? '';
if (str_ends_with($path, '.php')) {
    $clean = substr($path, 0, -4);
    if ($clean === '/index' || $clean === '') {
        $clean = '/';
    }
    header('Location: ' . $clean, true, 301);
    exit;
}
ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
<meta content="utf-8" http-equiv="encoding"/>
<meta name="author" content="BradleyΣ"/>
<meta name="version" content="v0.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="canonical" href="https://tirules2.com<?php echo htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>"/>
<link rel="icon" href="favicon.png"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
$content = ob_get_clean();
ob_start();
register_shutdown_function(function() use ($content) {
    $page_content = ob_get_clean();
    
    // Extract the header text
    $page_title = 'Twilight Imperium Rule Help';
    if (preg_match('/<header>(.*?)<\/header>/i', $page_content, $matches)) {
        $page_title = strip_tags($matches[1]) . ' - Twilight Imperium Rules';
    }
    
    // Output the complete page with dynamic title
    echo $content;
    echo '<title>' . htmlspecialchars($page_title) . '</title>';
    echo "\n</head>\n<body>\n";
    echo $page_content;
});
?>
