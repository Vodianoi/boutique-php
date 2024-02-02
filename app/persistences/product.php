<?php
function getAllProducts(PDO $pdo)
{
    $statement = $pdo->query('SELECT *
        FROM products
ORDER BY id DESC
LIMIT 10');
    return $statement->fetchAll();
}

$productid = $pdo->query('SELECT id
FROM products');
function getProduct(PDO $pdo, $product_id)
{
    $contentblogPost = $pdo->query("SELECT id, title, description, weight, ttc
    FROM products
    WHERE id='$product_id'
            ");
    return $contentblogPost->fetchAll();
}
