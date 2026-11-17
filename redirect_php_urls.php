<?php
// 301 redirect .php URLs to clean URLs (preserves SEO value of the canonical clean URL)
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$path = parse_url($requestUri, PHP_URL_PATH) ?? '';
if (preg_match('#^/pudding/([RFC]_[A-Za-z0-9_]+)(\.php)?$#', $path, $m)) {
    header('Location: /' . $m[1] . '/pudding', true, 301);
    exit;
}
if (str_ends_with($path, '.php')) {
    $clean = substr($path, 0, -4);
    if ($clean === '/index' || $clean === '') {
        $clean = '/';
    }
    header('Location: ' . $clean, true, 301);
    exit;
}
