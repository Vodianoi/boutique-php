<?php
include '../app/persistences/boutiqueData.php';
global $pdo;
global $product_id;
$getproduct_id = productByid($pdo, $product_id);
include '../resources/views/product/show.php';