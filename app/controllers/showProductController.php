<?php

require '../app/persistences/product.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

require '../resources/views/product/show.php';