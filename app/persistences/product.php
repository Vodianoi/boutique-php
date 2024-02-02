<?php

echo 'test boutiqueData' . '<br \>';
function lastBoutiqueProducts(PDO $pdo)
{
    $sql = "SELECT products.id, products.title, products.description, products.price, products.ttc
    FROM products ORDER BY products.id DESC LIMIT 10";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}


function boutiqueProductsById(PDO $pdo, $productId)
{
    $sql = "SELECT products.id, products.title, products.description, products.ttc
    From products 
    WHERE products.id = $productId";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}