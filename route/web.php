<?php
session_start();
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$controllerFolder = '../app/controllers/';
$metaTitle = ucfirst($action);

$dirArray = scandir($controllerFolder);

$routeArray = array();

foreach ($dirArray as $file){
    if(!($file == "." || $file == "..")){
        $routeArray[] = explode("Controller", $file)[0];
    }
}

$route = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$route = $route ?? "home";
require('../resources/views/layouts/header.tpl.php');
if (in_array($route, $routeArray)){
    $i = array_search($route, $routeArray);
    require($controllerFolder . $routeArray[$i] . "Controller.php");
}else{
    require ("../resources/views/errors/404.php");
}
include('../resources/views/layouts/footer.tpl.php');

