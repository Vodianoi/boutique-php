<?php

echo 'test cartController' . '<br \>';

include('../app/persistences/cart.php');

$productId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($productId)) {
    addProductCart($productId, $quantity);
}

if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $productId => $quantity) {
        updateProductCart($productId, $quantity);
    }
} elseif (isset($_POST['delete_product'])) {
    $productId = $_POST['delete_product'];
    deleteProductCart($productId);
}

$result = totalCart($pdo);

include("../resources/views/cart/cart.tpl.php");