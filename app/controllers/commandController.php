<?php
if (!isset($_GET['id'])) {
    $id = checkout($pdo, $_SESSION['id'] ?? rand(1, 7));
    if ($id === false) {
        include '../resources/views/errors/noStock.php';
    } else {
        resetCart();
        header('Location: ?action=command&id=' . $id);
    }
} else {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
    $command = commandByID($pdo, $id);
    $totalCommand = totalCommand($pdo, $id);
    if (empty($command)) {
        header('Location: ?action=404');
        die();
    }
    include '../resources/views/cart/command.tpl.php';
}
