<?php

function totalCart(PDO $pdo, $productsQuantities): array
{
    $total = 0;
    $count = 0;
    foreach ($productsQuantities as $id => $quantity) {
        $product = getProduct($pdo, $id);
        $total += $product['ttc'] * $quantity;
        $count += $quantity;
    }
    return array('total' => $total, 'count' => $count);
}


function initCart($force = false): void
{
    if (!isset($_SESSION['cart']) || $force) {
        $_SESSION['cart'] = array();
    }
}

/**
 * @throws \Random\RandomException
 */
function fakeCart(): void
{
    initCart(true);
    $fakeProducts = array(
        random_int(1, 5) => random_int(1, 20),
        random_int(1, 5) => random_int(1, 20),
        random_int(1, 5) => random_int(1, 20),
    );

    foreach ($fakeProducts as $id => $quantity) {
        addProductCart($id, $quantity);
    }

}

function addProductCart($productID, $quantity): void
{
    initCart();
    if (isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] += $quantity;
    } else {
        $_SESSION['cart'] += [$productID => $quantity];
    }
}

/**
 * @throws Exception
 */
function updateProductCart($productID, $newQuantity): void
{
    if (isset($_SESSION['cart'][$productID])) {
        if ($newQuantity <= 0) {
            deleteProductCart($productID);
        } else
            $_SESSION['cart'][$productID] = (int)$newQuantity;
    } else {
        throw new Exception("Can't update product, productID : " . $productID . ' not in cart!');
    }
}

/**
 * @return void
 */
function resetCart(): void
{
    initCart(true);
    header('Location: ?action=cart');
}

/**
 * @param $idQuantities
 * @return void
 * @throws Exception
 */
function updateCartQuantities($idQuantities): void
{
    foreach ($idQuantities as $productID => $quantity)
        updateProductCart($productID, $quantity);
}

function deleteProductCart($id): void
{
    if (!isset($_SESSION['cart'])) return;

    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

function quantities_idToIDQuantities($quantities_id): array
{
    $res = [];
    foreach ($quantities_id as $key => $quantity) {
        if (str_contains($key, 'quantity_')) {
            $productID = explode('_', $key)[1];
            $res += [$productID => $quantity];
        }
    }
    return $res;


}






