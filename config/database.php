<?php

$pdo = new PDO('mysql:host=boutique.local;dbname=boutique', 'boutiqueUser', 'heimy');



$statement = $pdo->query("SELECT lastname FROM customers");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo 'test database - ';
echo htmlentities($row['lastname']);
echo '<br \>';