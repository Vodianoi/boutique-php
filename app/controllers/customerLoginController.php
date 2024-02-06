<?php
include '../app/persistences/customer.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    $user['password'] = encryptPassword($user['password']);
    if (checkLogin($pdo, $user['email'], $user['password'])) {
        $_SESSION["logged"] = true;
        $_SESSION['email'] = $user['email'];
        if ($_POST['remember']) {
            $delimiter = "//";
            $cookieString = $user['email'] . $delimiter . $user['password'];
            $cookieDuration = 60 * 60 * 24 * 60; // 60 jours
            setcookie('autoconnection', $cookieString, time() + $cookieDuration);
        }
        $_SESSION['admin'] = customerIsAdminByEmail($pdo, $user['email']);

        header('Location: /');
    } else {
        echo 'Error on password/email';
    }
}

if (isset($_COOKIE['autoconnection']) && is_string($_COOKIE['autoconnection'])) {
    var_dump($_COOKIE['autoconnection']);
    $delimiter = "//";
    $split = explode($delimiter, $_COOKIE['autoconnection']);
    $email = $split[0] ?? "";
    $password = isset($split[1]) ?? "";
    if (checkLogin($pdo, $email, $password)) {
        $_SESSION["logged"] = true;
        $_SESSION['admin'] = customerIsAdminByEmail($pdo, $user['email']);
        header('Location: /');
    } else {
        setcookie('autoconnection', null, time() - 3600);
    }
}

include '../resources/views/session/login.tpl.php';