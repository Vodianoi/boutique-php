<?php
//fonction qui retourne un produit de la BDD
function getProduct($pdo, $id)
{
$statement = $pdo->query("SELECT products.title, products.description, products.ttc, products.stock
FROM products
WHERE products.id = $id
");
return $statement->fetchAll(PDO::FETCH_ASSOC);
}
