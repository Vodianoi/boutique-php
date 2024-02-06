<?php

echo 'test cartController' . '<br \>';

include('../app/persistences/cart.php');

$productId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($productId)) {
    addProductCart($productId, $quantity);
}
$result = totalCart($pdo);

include("../resources/views/cart/cart.tpl.php");