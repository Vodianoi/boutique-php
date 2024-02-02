<?php

function getProduct(PDO $pdo, $id)
{
    $sql = 'SELECT * FROM products WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function getAllProducts(PDO $pdo): false|array
{
    $sql = 'SELECT * FROM products';
    return $pdo->query($sql)->fetchAll();
}