<?php
// Router script for PHP built-in server

$requestUri = $_SERVER['REQUEST_URI'];
$requestPath = parse_url($requestUri, PHP_URL_PATH);

// Remove leading slash and trailing slash
$requestPath = trim($requestPath, '/');

// If it's the root or empty, serve index.php
if (empty($requestPath)) {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    $_SERVER['PHP_SELF'] = '/index.php';
    chdir(__DIR__);
    require __DIR__ . '/index.php';
    return true;
}

// Handle query strings - preserve them
$queryString = parse_url($requestUri, PHP_URL_QUERY);
if ($queryString) {
    parse_str($queryString, $_GET);
}

// Check if the requested path exists as a PHP file
$phpFile = __DIR__ . '/' . $requestPath . '.php';

if (file_exists($phpFile) && is_file($phpFile)) {
    // Set the script name for proper path resolution
    $_SERVER['SCRIPT_NAME'] = '/' . $requestPath . '.php';
    $_SERVER['PHP_SELF'] = '/' . $requestPath . '.php';
    chdir(__DIR__);
    require $phpFile;
    return true;
}

// Check if it's a static file (CSS, JS, images, etc.)
$filePath = __DIR__ . '/' . $requestPath;
if (file_exists($filePath) && is_file($filePath)) {
    return false; // Let the server handle static files
}

// Check if it's a directory
if (is_dir($filePath)) {
    return false; // Let the server handle directories
}

// 404 - File not found
http_response_code(404);
header('Content-Type: text/html; charset=utf-8');
echo "<!DOCTYPE html><html><head><title>404 - Page Not Found</title></head><body><h1>404 - Page Not Found</h1><p>The requested page could not be found.</p></body></html>";
return false;

