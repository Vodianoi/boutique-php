<?php
include '../app/persistences/product.php';
global $pdo;
global $product_id;
include '../resources/views/layouts/header.tpl.php';
//$MetaTitle = $pdo->query("SELECT title FROM products WHERE products.id = '$product_id';");
//$MetaDescription = $pdo->query("SELECT description FROM products WHERE products.id = $product_id");
$getproduct_id = getProduct($pdo, $product_id);
if (!isset($getproduct_id)) {
    echo "Mauvais produit !";
}
include '../resources/views/product/show.php';
