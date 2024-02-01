<?php
$MetaTitle = "Catalogue";
$MetaDescription = "Le catalogue du site.";
include '../resources/views/layouts/header.tpl.php';
include '../app/persistences/boutiqueData.php';
global $pdo;
$product = lastProductData($pdo);
if (!isset($product)) {
    echo "Aucun produit";
} else {
    foreach ($product as $row) {
        echo $row["id"]. "       ";
        echo $row["title"] . "     ";
        echo $row["content"] . "     ";
        echo $row["ttc"]. "     <br>";
    }
}
include '../resources/views/showAll.php';