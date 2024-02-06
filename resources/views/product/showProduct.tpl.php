<?php echo 'test showProduct.tpl' . '<br \>'; ?>

<body>
<?php foreach ($boutiqueProductsById as $product) : ?>
    <div class="product">
        <h2 class="product-title"><?= $product['title'] ?></h2>
        <div class="product-info">
            <img src="https://placehold.co/200x200" alt="Image du Produit" class="product-image">
            <div class="product-description">
                <p><?= $product['description'] ?></p>
            </div>
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
</body>