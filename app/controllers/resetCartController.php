<?php

echo 'test resetCartController' . '<br \>';

unset($_SESSION['cart']);

include("../resources/views/cart/cart.tpl.php");