<?php

echo 'test cartController' . '<br \>';


include('../app/persistences/product.php');

$cart = lastBoutiqueProducts($pdo, $productId);

include('../resources/views/product/cart.tpl.php');


//include('../app/persistences/cart.php');

//$boutiqueProductsById = boutiqueProductsById($pdo, $productId);
// fonction cart

//include('../resources/views/product/cart.tpl.php');
