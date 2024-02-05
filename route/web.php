<?php

echo 'test web' . '<br \>';

$metatitle = "Boutique";
$metaDescription = "Boutique";
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

include('../config/database.php');

if($action === null){
    $action = '/';
}
// a changer
//if($action == 'showAll' && isset($productId)){
//    include ("../app/controllers/showAllController.php");
//}
//if($action == 'showProduct' && isset($productId)){
//    include ("../app/controllers/showProductController.php");
//}
//if($action == 'cart' && isset($productId)){
//    include ("../app/controllers/cartController.php");
//}

$routes = array(
    '/' => '../app/controllers/homeController.php',

    'showAll' => '../app/controllers/showAllController.php',

    'showProduct' => '../app/controllers/showProductController.php',

    'cart' => '../app/controllers/cartController.php',
);

if (isset($routes[$action])) {
    include $routes[$action];
}