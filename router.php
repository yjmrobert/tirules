<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($path ?? '/');

if ($path === '' || $path === '/') {
    require __DIR__ . '/index.php';
    return true;
}

$docRoot = realpath(__DIR__);

$resolvedPath = realpath(__DIR__ . $path);
if ($resolvedPath !== false && str_starts_with($resolvedPath, $docRoot . DIRECTORY_SEPARATOR) && is_file($resolvedPath)) {
    return false;
}

$resolvedPhpPath = realpath(__DIR__ . $path . '.php');
if ($resolvedPhpPath !== false && str_starts_with($resolvedPhpPath, $docRoot . DIRECTORY_SEPARATOR) && is_file($resolvedPhpPath)) {
    require $resolvedPhpPath;
    return true;
}

require __DIR__ . '/index.php';
return true;
