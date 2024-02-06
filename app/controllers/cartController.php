<?php
require('../app/persistences/cart.php');
require('../app/persistences/product.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['reset'])) {
        resetCart();
        exit();
    }
    if (isset($_POST['update'])) {
        $idQuantities = quantities_idToIDQuantities($_POST);
        var_dump($idQuantities);
        try {
            updateCartQuantities($idQuantities);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        //Redirect to cart page
        header('Location: ?action=cart');
        exit();
    }
    $cartItem = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    addProductCart($cartItem['id'], $cartItem['quantity']);

    //Redirect to product added
    header('Location: ?action=product&id=' . $cartItem['id']);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $productQuantities = $_SESSION['cart'] ?? [];
    $totalCart = totalCart($pdo, $productQuantities);
    $_SESSION['total'] = $totalCart;
    include('../resources/views/cart/cart.tpl.php');
}
