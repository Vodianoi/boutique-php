<?php
echo 'test fakeCart.tpl' . '<br \>';
?>

<section class="cart">

    <?php if (!isset($_SESSION['cart'])) { ?>
        <h1>Your fake cart is empty</h1>
    <?php } else { ?>
        <h1>Your fake cart</h1>
        <div class="cart-header">
            <div class="cart-column">Product</div>
            <div class="cart-column">Price unit</div>
            <div class="cart-column">Quantity</div>
            <div class="cart-column">Total</div>
        </div>
        <?php foreach ($_SESSION['cart'] as $id => $quantity) : ?>
            <?php $product = productDetails($pdo, $id) ?>
            <div class="cart-item">
                <img src="https://placekitten.com/50/50" alt="Image du Produit" class="product-image-cart">
                <div class="product-info">
                    <h2 class="product-title"><?= $product['title'] ?></h2>
                </div>
                <div class="cart-column">
                    <div class="price-unit"><?= $product['ttc'] ?> €</div>
                </div>
                <div class="cart-column">
                    <div class="quantity"><?= $quantity ?> </div>
                </div>
                <div class="cart-column">
                    <div class="total"><?= $product['ttc'] * $quantity; ?> €</div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="cart-total">
            <div>Total of all: <span><?= $result["total"] ?> €</span></div>
        </div>
        <div class="cart-footer">
            <button class="validate-btn">Valid the cart</button>
        </div>
    <?php } ?>
</section>