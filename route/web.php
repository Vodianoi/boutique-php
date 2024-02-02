<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

if ($action == null) require '../app/controllers/homeController.php';
if ($action ==  'product') require '../app/controllers/showProductController.php';