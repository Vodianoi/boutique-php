<?php

require '../app/persistences/cart.php';
require '../app/persistences/product.php';

initCart();
fakeCart();


foreach ($_SESSION['cart'] as $productID => $quantity) {
    $product = getProduct($pdo, $productID);
    $cart[] = [
        'id' => $productID,
        'name' => $product['title'],
        'priceTtc' => $product['ttc'],
        'quantity' => $quantity,
        'total' => $quantity * $product['ttc'],
    ];

}

$totalCart = totalCart($pdo);





require '../resources/views/cart/index.php';



