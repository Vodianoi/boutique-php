<?php
require '../app/persistences/product.php';

$allProduct = getAllProducts($pdo);

require '../resources/views/home.php';