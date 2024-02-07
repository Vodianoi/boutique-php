<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

deleteProductCart($id);

header('Location: ?action=cart');