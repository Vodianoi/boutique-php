<?php
global $pdo, $product_id;

require '../app/persistences/product.php';

$product_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$product = getProduct($pdo, $product_id);

require '../resources/views/product/show.php';