<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<?php echo 'test cart.tpl' . '<br \>'; ?>

<body>
<header>
    <h1>Panier</h1>
</header>

<section class="cart">
    <?php foreach ($cart  as $product) : ?>
    <div class="cart-header">
        <div>Produit</div>
        <div>Prix unitaire</div>
        <div>Quantité</div>
        <div>Total</div>
    </div>
    <div class="cart-item">
        <img src="https://placehold.co/75x75" alt="Image du Produit" class="product-image-cart">
        <div class="product-info">
            <h2 class="product-title"><?= $product['title'] ?></h2>
            <div class="product-bottom">
                <div class="price-unit"><?= $product['ttc'] ?> €</div>
                <div class="quantity"><?= $product['stock'] ?></div>
                <div class="total"><?= $total = $product['stock']*$product['ttc'] ?> €</div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="cart-total">
        <div>Total de tout: <span>Montant total</span></div>
    </div>
    <div class="cart-footer">
        <button class="validate-btn">Valider le panier</button>
    </div>
</section>
</body>
</html>