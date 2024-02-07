<?php
//fonction qui retourne un produit de la BDD
function getProduct(PDO $pdo, $product_id)
{
    $statement = $pdo->query("SELECT products.id, products.title, products.description, products.ttc, products.stock
FROM products
WHERE products.id = $product_id
");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

//fonction qui retourne tous les produits de la BDD
function getAllProducts(PDO $pdo): false|array
{
    $statement = $pdo->query("SELECT products.id,products.title, products.description, products.ttc, products.stock
FROM products");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
