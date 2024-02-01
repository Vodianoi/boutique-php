<?php
//pdo. Connection à la base de donnée 'boutique'.

try{
    $pdo = new PDO('mysql:host=localhost;dbname=boutique', 'boutiqueUser', '1234');
} catch (Exception $e){
    exit('Erreur : ' . $e->getMessage());
}