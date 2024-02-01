<?php
global $pdo;
require('../app/persistences/product.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$product = getProduct($pdo, $id);

require('../resources/views/product/show.php');