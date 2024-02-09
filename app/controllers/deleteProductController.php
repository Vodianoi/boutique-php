<?php
if(!isset($_SESSION['admin']) || !$_SESSION['admin'])
{
    header('Location: ?action=404');
    die();
}
else {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

    deleteProduct($pdo, $id);

    header('Location: /');
}