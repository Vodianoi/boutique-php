<?php

$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

echo 'test showProduct' . '<br \>';

include('../app/persistences/product.php');

$boutiqueProductsById = boutiqueProductsById($pdo, $productId);

include('../resources/views/product/showProduct.tpl.php');