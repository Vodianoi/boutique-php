<?php
/***************************
 * Inclusion de la database.
 **************************/
include ('../config/database.php');

/**************
 * Routing
 *************/
$action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_SPECIAL_CHARS);
$product_id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if(empty($action)){
    $action = '/';
}
$routes=array(
    '/' => '../app/controllers/showAllProductController.php',
    "showproduct" => '../app/controllers/showProductController.php');
if (isset($routes[$action])){
    include $routes[$action];}

/***************************
 * Affichage d'un seul article
 ***************************/
if($action == "showproduct" &&  isset($product_id)){
    include "../app/controllers/showProductController.php";}