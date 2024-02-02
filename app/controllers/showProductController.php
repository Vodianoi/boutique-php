<?php

echo 'test showProduct' . '<br \>';

include('../app/persistences/boutiqueData.php');

echo 'test showProduct' . '<br \>';

$boutiqueProductsById = boutiqueProductsById($pdo, $productId);

include('../resources/views/product/showProduct.tpl.php');
