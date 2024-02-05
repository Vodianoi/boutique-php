<?php

echo 'test cart fonction' . '<br \>';
function initCart() {
    $_SESSION['cart'] = array();
}

function fakeCart() {
    initCart();

    $_SESSION['cart'][] = ["id" => 1, "qte" => rand(1, 10)];
    $_SESSION['cart'][] = ["id" => 3, "qte" => rand(1, 10)];
    $_SESSION['cart'][] = ["id" => 5, "qte" => rand(1, 10)];
}

function productDetails(PDO $pdo, $productId)
{
    $sql = "SELECT *
    From products 
    WHERE products.id = '$productId'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetch();
}

function totalCart($pdo) {
    $total = 0;
    $totalProducts = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $productDetails = productDetails($pdo, $product["id"]);
            $total += $productDetails['ttc'] * (int)$product['qte'];
            $totalProducts += (int)$product['qte'];
        }
    }

    return array("total" => $total, "totalProducts" => $totalProducts);
}