<?php
// 301 redirect .php URLs to clean URLs (preserves SEO value of the canonical clean URL)
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
