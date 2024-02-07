<?php

global $pdo;
require '../app/persistences/cart.php';
require '../app/persistences/product.php';

initCart();
//fakeCart();
if(!empty($_SESSION['cart'])) {
    $cart = cartToProductList($pdo, $_SESSION['cart']);

    $totalCart = totalCart($pdo, $_SESSION['cart']);

    require '../resources/views/cart/index.php';
}else {
    echo 'panier vide';
}



