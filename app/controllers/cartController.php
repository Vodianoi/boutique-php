<?php


echo 'test cartController' . '<br \>';

include('../app/persistences/cart.php');


initCart();
fakeCart();
$result = totalCart($pdo);

include("../resources/views/cart/cart.tpl.php");