<?php
function checkout(PDO $pdo): false|string
{
    $sql = 'INSERT INTO orders (command_date, delivery_date, clients_id)
VALUES (CURDATE(), CURDATE() + 7, ROUND(RAND()*5))';
    $stmt = $pdo->query($sql);
    $orderID = $pdo->lastInsertId();

    foreach($_SESSION['cart'] as $productID => $quantity){
        $sql = 'INSERT INTO orders_products (orders_id, products_id, quantity) 
VALUES (:orders_id, :products_id, :quantity)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'orders_id' => $orderID,
            'products_id' => $productID,
            'quantity' => $quantity
        ]);
    }
    return $orderID;
}

function commandByID(PDO $pdo, int $id)
{
    $sql = 'SELECT * FROM orders 
         JOIN orders_products as op ON orders.id = op.orders_id
         JOIN products ON op.products_id = products.id
         WHERE orders.id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}

function totalCommand(PDO $pdo,int|array $command): array
{
    $command = is_array($command) ? $command : commandByID($pdo, $command);
    $total = 0;
    foreach($command as $product)
    {
        $total += $product['ttc'] * $product['quantity'];
    }
    return array(
        'total' => $total,
        'count' => count($command)
    );
}
