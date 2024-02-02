<?php
$MetaTitle = "Catalogue";
$MetaDescription = "Le catalogue du site.";
include '../resources/views/layouts/header.tpl.php';
include '../app/persistences/product.php';
global $pdo;
$product = getAllProducts($pdo);
if (!isset($product)) {
    echo "Aucun produit";
}
include '../resources/views/showAll.php';