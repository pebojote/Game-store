<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
switch ($request_uri[0]) {
        // Home page
    case '/':
        include './source/template/index.php';
        break;
        // Product page
    case '/product':
        include './source/template/product.php';
        break;
        // About page
    case '/about':
        include './source/template/about.php';
        break;
        // 404 Not Found
    default:
        header('HTTP/1.0 404 Not Found');
        include './source/template/404.php';
        break;
}
