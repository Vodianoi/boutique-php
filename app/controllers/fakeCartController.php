<?php
require('../app/persistences/cart.php');
session_start();
try {
    fakeCart();
    header('Location: ?action=cart');
} catch (\Random\RandomException $e) {
    echo $e->getMessage();
}