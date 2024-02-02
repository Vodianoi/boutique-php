<?php

echo 'test web' . '<br \>';

$metatitle = "Boutique";
$metaDescription = "Boutique";
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include('../config/database.php');

if($action === null){
    $action = '/';
}
if($action == 'showAll' && isset($productId)){
    include ("../app/controllers/showAllController.php");
}
if($action == 'showProduct' && isset($productId)){
    include ("../app/controllers/showProductController.php");
}

$routes = array(
    '/' => '../app/controllers/homeController.php',

    'showAll' => '../app/controllers/showAllController.php',

    'showProduct' => '../app/controllers/showProductController.php'
);

if (isset($routes[$action])) {
    include $routes[$action];
}

