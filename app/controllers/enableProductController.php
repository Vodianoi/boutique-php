<?php
if(!isset($_SESSION['admin']) || !$_SESSION['admin'])
{
    header('Location: ?action=404');
}
else {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    enableProduct($pdo, $id);

    header('Location: ?action=product&id=' . $id);
}