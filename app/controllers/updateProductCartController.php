<?php

require '../app/persistences/cart.php';

$cart = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

var_dump($cart);