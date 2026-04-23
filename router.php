<?php
$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = ltrim($uri, '/');

// Serve real static files (css, js, images, fonts) directly
if ($uri !== '/' && file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// /blog/slug  →  blog/slug.php
if (preg_match('#^blog/([^/\.]+)/?$#', $path, $m)) {
    $file = __DIR__ . '/blog/' . $m[1] . '.php';
    if (file_exists($file)) {
        chdir(__DIR__ . '/blog');
        include $file;
        exit;
    }
}

// /blog or /blog/  →  blog.php
if (preg_match('#^blog/?$#', $path)) {
    include __DIR__ . '/blog.php'; exit;
}

// /page  →  page.php  (no extension, no dot in name)
if ($path !== '' && !str_contains($path, '.')) {
    $file = __DIR__ . '/' . $path . '.php';
    if (file_exists($file)) { include $file; exit; }
}

// root  →  index.php
if ($path === '') {
    include __DIR__ . '/index.php'; exit;
}

http_response_code(404);
echo '<h1>404 Not Found</h1>';
