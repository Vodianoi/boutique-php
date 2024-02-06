<?php

echo 'test web' . '<br \>';

$metatitle = "Boutique";
$metaDescription = "Boutique";
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

include('../config/database.php');

if($action === null){
    $action = '/';
}

$routes = array(
    '/' => '../app/controllers/homeController.php',

    'showAll' => '../app/controllers/showAllController.php',

    'showProduct' => '../app/controllers/showProductController.php',

    'cart' => '../app/controllers/cartController.php',

    'fakeCart' => '../app/controllers/fakeCartController.php',

    'resetCartController' => '../app/controllers/resetCartController.php',
);

if (isset($routes[$action])) {
    include $routes[$action];
}