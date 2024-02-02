<?php

echo 'test showAll' . '<br \>';

include('../app/persistences/product.php');

$lastBoutiqueProducts = lastBoutiqueProducts($pdo);

include('../resources/views/product/showAll.tpl.php');