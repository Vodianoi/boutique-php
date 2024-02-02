<?php
include '../app/persistences/boutiqueData.php';
global $pdo;
global $product_id;
include '../resources/views/layouts/header.tpl.php';
//$MetaTitle = $pdo->query("SELECT title FROM products WHERE products.id = '$product_id';");
//$MetaDescription = $pdo->query("SELECT description FROM products WHERE products.id = $product_id");
$getproduct_id = productByid($pdo, $product_id);
if (!isset($getproduct_id)) {
    echo "Mauvais produit !";
}
include '../resources/views/product/show.php';
