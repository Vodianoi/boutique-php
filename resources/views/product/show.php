<?php
global $pdo, $product;
?>
<div class="article">
    <img src="/img/600x400.svg" alt="placeholder"/>
    <h2><?= $product['title'] ?></h2>
    <p><?= $product['description'] ?></p>
    <h3><?= $product['ttc'] ?></h3>
    <form action="index.php?action=addProduct" method="Post">
        <label for="quantity">Quantité :</label>
        <input id="quantity" type="number" name="quantité" value="1" min="1" max="100">
        <button type="submit">Ajouter au Panier</button>
    </form>
</div>
