<?php
require('../config/database.php');
if (isset($_COOKIE['autoconnection']) && is_string($_COOKIE['autoconnection'])) {
    $delimiter = "//";
    $split = explode($delimiter, $_COOKIE['autoconnection']);
    $email = $split[0] ?? "";
    $password = isset($split[1]) ?? "";
    if ($user = checkLogin($pdo, $email, $password)) {
        $_SESSION["logged"] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['admin'] = $user['admin'];
        header('Location: /');
    } else {
        setcookie('autoconnection', null, time() - 3600);
    }
}