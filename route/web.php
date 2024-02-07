<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

if (empty($action)) {
    $action = 'home';
}
//definition du titre de la page en fonction de l'action.
$metaTitle = ucfirst($action);

$routes = array(
    'home' => '../app/controllers/homeController.php',
    'product' => '../app/controllers/showProductController.php',
    'cart' => '../app/controllers/showCartController.php',
    'addProduct' => '../app/controllers/addProductCartController.php',
    'updateProduct' => '../app/controllers/updateProductCartController.php',
);
require '../resources/views/layouts/header.tpl.php';

if (isset($routes[$action])) {
    require $routes[$action];
}

require '../resources/views/layouts/footer.tpl.php';
