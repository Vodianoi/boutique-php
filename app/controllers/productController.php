<?php
global $pdo;

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$product = getProduct($pdo, $id);

require('../resources/views/product/show.php');