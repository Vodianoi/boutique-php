<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
</head>

<?php echo 'test showAll.tpl' . '<br \>'; ?>



<?php foreach ($lastBoutiqueProducts  as $product) : ?>
    <div class="product">
        <h2 class="product-title"><?= $product['title'] ?></h2>
        <div class="product-info">
            <img src="https://placehold.co/200x200" alt="Image du Produit" class="product-image">
        </div>
        <div class="product-bottom">
            <p class="product-price"><?= $product['ttc'] ?> Ð</p>
            <form action="/index.php?action=cart" method="POST">
                <label for="quantity">Quantité:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>


</html>