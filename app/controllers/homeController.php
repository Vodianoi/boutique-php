<?php
global $pdo;
require('../app/persistences/product.php');
$products = getAllProducts($pdo);
include '../resources/views/home.tpl.php';