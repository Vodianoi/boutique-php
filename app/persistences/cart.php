<?php

echo 'test cart fonction' . '<br \>';
function initCart()
{
    $_SESSION['cart'] = array();
}

function fakeCart()
{
    initCart();

    addProductCart(1, rand(1, 10));
    addProductCart(3, rand(11, 20));
    addProductCart(5, rand(21, 30));

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

function totalCart($pdo)
{
    $total = 0;
    $totalProducts = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id => $quantity) {
            $productDetails = productDetails($pdo, $id);
            $total += $productDetails['ttc'] * (int)$quantity;
            $totalProducts += (int)$quantity;
        }
    }

    return array("total" => $total, "totalProducts" => $totalProducts);
}

function addProductCart($productId, $quantity)
{
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        $_SESSION['cart'] += [$productId => $quantity];
    }
}

function updateProductCart($productId, $quantity)
{
    if ($quantity == 0) {
        unset($_SESSION['cart'][$productId]);
    } elseif (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = $quantity;
    }
}

function deleteProductCart($productId)
{
    unset($_SESSION['cart'][$productId]);
}
