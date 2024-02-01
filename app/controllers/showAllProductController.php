<?php
include '../app/persistences/boutiqueData.php';
global $pdo;
$product = lastProductData($pdo);
include '../resources/views/showAll.php';