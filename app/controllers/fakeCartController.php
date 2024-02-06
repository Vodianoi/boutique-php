<?php

echo 'test fakeCartController' . '<br \>';

include('../app/persistences/cart.php');

initCart();
fakeCart();
$result = totalCart($pdo);

include("../resources/views/cart/fakeCart.tpl.php");