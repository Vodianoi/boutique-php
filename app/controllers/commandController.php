<?php
session_start();
include '../app/persistences/command.php';
include '../app/persistences/cart.php';
if(!isset($_GET['id']))
{
    $id = checkout($pdo);
    resetCart();
    header('Location: ?action=command&id='.$id);
}
else
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
    $command = commandByID($pdo, $id);
    $totalCommand = totalCommand($pdo, $id);
    if(empty($command))
    {
        header('Location: ?action=404');
        die();
    }
    include '../resources/views/cart/command.tpl.php';
}
