<?php
$customer = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

customerCreate($pdo, $customer);

header('Location: /');