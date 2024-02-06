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

function deleteProduct(PDO $pdo, $id): bool
{
    $sql = 'DELETE FROM products WHERE id= ?';
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function updateProduct(PDO $pdo, $product): bool
{
    $category = getCategoryIDByName($pdo, $product['category']);
    var_dump($category);
    $sql = 'UPDATE products 
    SET title=:title, description=:description, price=:price, weight=:weight, tax=:tax, ttc=:ttc, stock=:stock, categories_id=:category
    WHERE id=:id';
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        'title' => $product['title'],
        'description' => $product['description'],
        'price' => $product['price'],
        'weight' => $product['weight'],
        'tax' => $product['tax'],
        'ttc' => $product['ttc'],
        'stock' => $product['stock'],
        'category' => $category,
        'id' => $product['id'],
    ]);
}

function getCategories(PDO $pdo): false|array
{
    $sql = 'SELECT * FROM categories';
    return $pdo->query($sql)->fetchAll();
}

function getCategoryForProductID(PDO $pdo, $id): string
{
    $sql = 'SELECT c.name FROM products
JOIN categories as c ON c.id = products.categories_id
WHERE products.id = ?
';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetchColumn();
}

function getCategoryIDByName(PDO $pdo, $name): int
{
    $sql = 'SELECT id FROM categories
WHERE name = ?
';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name]);
    return $stmt->fetchColumn();
}