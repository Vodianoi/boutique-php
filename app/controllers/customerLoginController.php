<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    $user['password'] = encryptPassword($user['password']);
    if ($user = checkLogin($pdo, $user['email'], $user['password'])) {
        $_SESSION["logged"] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        if ($_POST['remember']) {
            $delimiter = "//";
            $cookieString = $user['email'] . $delimiter . $user['password'];
            $cookieDuration = 60 * 60 * 24 * 60; // 60 jours
            setcookie('autoconnection', $cookieString, time() + $cookieDuration);
        }
        $_SESSION['admin'] = $user['admin'];

        header('Location: /');
    } else {
        echo 'Error on password/email';
    }
}



include '../resources/views/session/login.tpl.php';