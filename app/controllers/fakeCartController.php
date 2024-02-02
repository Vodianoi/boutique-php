<?php
require('../app/persistences/cart.php');
try {
    fakeCart();
} catch (\Random\RandomException $e) {
}
header('Location: ?action=cart');