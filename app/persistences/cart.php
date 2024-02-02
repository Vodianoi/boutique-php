<?php
function getCartProducts(PDO $pdo, array $ids): false|array
{
    if (empty($ids)) return false;
    $in = str_repeat('?,', count($ids) - 1) . '?';
    $sql = "SELECT * FROM products WHERE id IN ($in)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($ids);
    return $stmt->fetchAll();
}

function totalCart($products, $quantities): array
{
    if(!is_array($products) || !is_array($quantities)) return array();
    $total = 0;
    for ($i = 0; $i < count($products); $i++)
        $total += $products[$i]['ttc'] * $quantities[$i];
    return array('total' => $total, 'count' => count($products));
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
    $fakeProduct1 = array(
        'id' => random_int(1,5),
        'quantity' => random_int(1,20)
    );
    $fakeProduct2 = array(
        'id' => random_int(1,5),
        'quantity' => random_int(1,20)
    );
    $fakeProduct3 = array(
        'id' => random_int(1,5),
        'quantity' => random_int(1,20)
    );

    addProductCart($fakeProduct1['id'], $fakeProduct1['quantity']);
    addProductCart($fakeProduct2['id'], $fakeProduct2['quantity']);
    addProductCart($fakeProduct3['id'], $fakeProduct3['quantity']);
}

function addProductCart($productID, $quantity): void
{
    initCart();
    if($i = productExistsInCart($productID))
    {
        echo 'index : '.$i;
        $_SESSION['cart'][$i]['quantity'] += $quantity;
    }
    else {
        $_SESSION['cart'][] = ['id' => $productID, 'quantity' => $quantity];
    }
}

function productExistsInCart($productID): false|int|string
{

    foreach($_SESSION['cart'] as $index => $product)
    {
        if($product['id'] == $productID)
        {
            return $index;
        }
    }
    return false;
}
