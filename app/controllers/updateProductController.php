<?php
if(!isset($_SESSION['admin']) || !$_SESSION['admin'])
{
    header('Location: ?action=404');
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

switch($_SERVER['REQUEST_METHOD'])
{
    case 'POST':
        $product = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        updateProduct($pdo, $product);
        header("Location: ?action=product&id=".$id);
        break;
    case 'GET':
        $product = getProduct($pdo, $id);
        $categories = getCategories($pdo);
        $productCategory = getCategoryForProductID($pdo, $id);
        include '../resources/views/product/update.php';
        break;
}