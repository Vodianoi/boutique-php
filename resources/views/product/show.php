<html>
<?php


foreach ($getproduct_id

as $row) : ?>


<div class="formArticle">
    <img src="/img/600.svg" alt="placeholder">
    <h2><?= $row["title"] ?></h2>
    <p><?= $row["description"] ?></p>
    <h5><?= $row["ttc"] ?></h5>
    <form action="cart" method="post">
        <input type="number" id="quantity" name="quantity">
        <label for="quantity">Combien ?</label>
        <button type="submit" name="buy">Ajoutez au panier</button>
    </form>
</div>
<?php endforeach; ?>
</html>

<?php include '../resources/views/layouts/footer.tpl.php'; ?>