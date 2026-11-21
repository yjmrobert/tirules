<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($path ?? '/');

if ($path === '' || $path === '/') {
    require __DIR__ . '/index.php';
    return true;
}

$docRoot = realpath(__DIR__);

// /R_combat/pudding serves pudding/R_combat.php (the page's note proofs)
if (preg_match('#^/([RFC]_[A-Za-z0-9_]+)/pudding$#', $path, $m) && is_file(__DIR__ . '/pudding/' . $m[1] . '.php')) {
    require __DIR__ . '/pudding/' . $m[1] . '.php';
    return true;
}

$resolvedPath = realpath(__DIR__ . $path);
if ($resolvedPath !== false && str_starts_with($resolvedPath, $docRoot . DIRECTORY_SEPARATOR) && is_file($resolvedPath)) {
    return false;
}

$resolvedPhpPath = realpath(__DIR__ . $path . '.php');
if ($resolvedPhpPath !== false && str_starts_with($resolvedPhpPath, $docRoot . DIRECTORY_SEPARATOR) && is_file($resolvedPhpPath)) {
    require $resolvedPhpPath;
    return true;
}

// Anything else is a missing page
require __DIR__ . '/404.php';
return true;
