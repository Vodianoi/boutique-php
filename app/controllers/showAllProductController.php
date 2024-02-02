<?php
$MetaTitle = "Catalogue";
$MetaDescription = "Le catalogue du site.";
include '../resources/views/layouts/header.tpl.php';
include '../app/persistences/boutiqueData.php';
global $pdo;
$product = lastProductData($pdo);
if (!isset($product)) {
    echo "Aucun produit";
}
include '../resources/views/showAll.php';