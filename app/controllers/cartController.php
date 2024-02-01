<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartItems = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    include('../resources/views/cart/cart.tpl.php');
}
else
{
    echo 'Pas de produits';
}
