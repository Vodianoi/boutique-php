<?php

$showProduct = getProduct($pdo, $id);
var_dump($showProduct);
?>

<body>
<form action="index.php?action=cart" method="Post">
    <label for="quantity">Quantité :</label>
    <input id="quantity" type="number" name="quantité" min="0" max="100">
    <button type="submit">Ajouter au Panier</button>
</form>
</body>
