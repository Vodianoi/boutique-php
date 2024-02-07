<?php

require '../app/persistences/cart.php';
require '../app/persistences/product.php';


initCart();

// Récupère les données du formulaire en POST et les filtre
$productID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

addProductCart($productID, $quantity);

header('Location: ?action=product&id='.$productID);

