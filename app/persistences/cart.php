<?php
function initCart(): void
{
    //demarrer une session
    if (!isset($_SESSION)) {
        session_start();
    }
    //créer un panier vide
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

}

//faux panier
function fakeCart(): void
{

    $_SESSION['cart'] = [
        '1' => 5,
        '2' => 36,
        '3' => 7,
    ];


}

function totalCart(PDO $pdo)
{
    $total = 0;
    $totalQuantity = 0;
    foreach ($_SESSION['cart'] as $productID => $quantity) {
        $product = getProduct($pdo, $productID);
        $total += $product['ttc'] * $quantity;
        $totalQuantity += $quantity;

    }
    //retourne un tableau avec le total et le total des quantités
    return [
        'total' => $total,
        'quantityProduct' => $totalQuantity,

    ];

}

function addProductCart($productID, $quantity): void
{
    //appel la fonction iniCart pour initialiser une session et un panier vide.
    //initCart();

    //si le produit existe déjà on rajoute la quantité demandé sinon ajoute tout simplement le produit dans le panier.
    if (isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] += $quantity;
    } else {
        $_SESSION['cart'] += [
            $productID => $quantity
        ];
    }

}
