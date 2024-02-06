<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

if (empty($action)) {
    $action = 'home';
}
$routes = array(
    'home' => '../app/controllers/homeController.php',
    'product' => '../app/controllers/showProductController.php',
    'cart' => '../app/controllers/showCartController.php',
);
if (isset($routes[$action])) {
    require $routes[$action];
}
