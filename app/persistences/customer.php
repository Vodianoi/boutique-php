<?php

function customerCreate(PDO $pdo, $user): void
{
    $sql = "INSERT INTO customers (email, password, firstname, lastname) VALUES (:email, :password, :firstname, :lastname)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        array(
            "email" => $user['email'],
            'password' => encryptPassword($user['password']),
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
        )
    );
}

function customerUpdate(PDO $pdo, $user): void
{
    $sql = 'UPDATE customers SET email = :email, password = :password, firstname = :firstname, lastname = :lastname WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        array(
            'email' => $user['email'],
            'password' => $user['password'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
        )
    );
}

function customerDelete(PDO $pdo, $user): void
{
    $sql = 'DELETE FROM customers WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('id' => $user['id']));
}

function customerDeleteByID(PDO $pdo, $user): void
{
    $sql = 'DELETE FROM customers WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('id' => $user['id']));
}

function customerByID(PDO $pdo, $user): array
{
    $sql = 'SELECT * FROM customers WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('id' => $user['id']));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function encryptPassword($password){
    return sha1($password);
}


function checkLogin($pdo, $email, $password){
    $sql = 'SELECT * FROM customers WHERE email = :email AND password = :password';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        'email'=> $email,
        'password'=> $password,
    ));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function customerIsAdminByID(PDO $pdo, $userID): bool
{
    return customerByID($pdo, $userID)['admin'] == true;
}

function customerIsAdminByEmail(PDO $pdo, $email): bool
{
    $sql = 'SELECT admin FROM customers WHERE email=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    return $stmt->fetch()['admin'];
}

