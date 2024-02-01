<?php
$MetaTitle = "Catalogue";
$MetaDescription = "Le catalogue du site.";
include '../resources/views/layouts/header.tpl.php';
if (!isset($product)) {
    echo "Aucun produit";
} else {
    foreach ($product as $row) {
        echo $row["title"] . "     ";
        echo $row["content"] . "     ";
        echo $row["ttc"]. "     <br>";
    }
echo "showAll";
}

