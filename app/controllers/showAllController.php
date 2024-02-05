<?php

$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

echo 'test showAll' . '<br \>';

include('../app/persistences/product.php');

$lastBoutiqueProducts = lastBoutiqueProducts($pdo);

include('../resources/views/product/showAll.tpl.php');