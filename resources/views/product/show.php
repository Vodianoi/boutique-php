<?php
$showProduct = getProduct($pdo, $product_id);

foreach ($showProduct

         as $value): ?>


    <div class="article">
        <img src="/img/600x400.svg" alt="placeholder">
        <h2><?= $value['title'] ?></h2>
        <p><?= $value['description'] ?></p>
        <h3><?= $value['ttc'] ?></h3>
        <!--<p><?= $value['stock'] ?> en stock</p>-->
        <form action="index.php?action=cart" method="Post">
            <label for="quantity">Quantité :</label>
            <input id="quantity" type="number" name="quantité" value="1" min="1" max="100">
            <button type="submit">Ajouter au Panier</button>
        </form>
    </div>

<?php endforeach; ?>
