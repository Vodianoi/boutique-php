<?php
global $pdo;
$products = getAllProducts($pdo);
include '../resources/views/home.tpl.php';