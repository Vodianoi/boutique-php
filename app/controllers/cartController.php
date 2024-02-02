<?php
require('../app/persistences/cart.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['reset']))
    {
        initCart(true);
        header('Location: ?action=cart');
        exit();
    }
    $cartItem = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    addProductCart($cartItem['id'], $cartItem['quantity']);
    header('Location: ?action=product&id=' . $cartItem['id']);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $ids = array_column($_SESSION['cart'], 'id');
    $quantities = array_column($_SESSION['cart'], 'quantity');
    $productsInCart = getCartProducts($pdo, $ids);
    $totalCart = totalCart($productsInCart, $quantities);
    include('../resources/views/cart/cart.tpl.php');
}
