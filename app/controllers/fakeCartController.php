<?php
require('../app/persistences/cart.php');
try {
    fakeCart();
    header('Location: ?action=cart');
} catch (\Random\RandomException $e) {
    echo $e->getMessage();
}