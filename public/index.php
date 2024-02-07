<?php
require __DIR__ . '/../autoload.php';
if(!isset($_SESSION))
{
    session_start();
}
(new App\Controller\DotEnvEnvironment)->load(__DIR__ . '/../');
require '../app/persistences/cart.php';
require '../app/persistences/command.php';
require '../app/persistences/customer.php';
require '../app/persistences/product.php';
require '../bootstrap/app.php';
require '../route/web.php';
