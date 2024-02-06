<?php echo 'test showAll.tpl' . '<br \>'; ?>

<?php foreach ($lastBoutiqueProducts  as $product) : ?>
    <div class="product">
        <a href="/index.php?action=showProduct&id=<?= $product['id']?>">
            <h2 class="product-title"><?= $product['title'] ?></h2></a>
        <div class="product-info">
            <img src="https://placekitten.com/600/200" alt="Image du Produit" class="product-image-all">
        </div>
        <div class="product-bottom">
            <p class="product-price"><?= $product['ttc'] ?> €</p>
            <form action="/index.php?action=cart" method="POST">
                <input type="hidden" value="<?= $product['id'] ?>" name="id">
                <label for="quantity">Quantité:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>


</html>