<?php
echo 'test cart.tpl' . '<br \>';
?>

<body>

<section class="cart">

<!--    --><?php //if (!isset($cart)) { ?>
<!--        <h1>Your cart is empty</h1>-->
<!--    --><?php //} else { ?>
        <h1>Your cart</h1>
        <div class="cart-header">
            <div>Product</div>
            <div>Price unit</div>
            <div>Quantity</div>
            <div>Total</div>
        </div>
        <?php foreach ($_SESSION['cart'] as $article) : ?>
        <?php $product = productDetails($pdo, $article['id']) ?>
            <div class="cart-item">
                <img src="https://placekitten.com/50/50" alt="Image du Produit" class="product-image-cart">
                <div class="product-info">
                    <h2 class="product-title"><?= $product['title'] ?></h2>
                    <div class="product-bottom">
                        <div class="price-unit"><?= $product['ttc'] ?> €</div>
                        <div class="quantity"><?= $article['qte'] ?> quantity</div>
                        <div class="total"><?= $product['ttc'] * $article['qte']; ?> €</div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="cart-total">
            <div>Total of all: <span><?= $result["total"] ?> €</span></div>
        </div>
        <div class="cart-footer">
            <button class="validate-btn">Valid the cart</button>
        </div>
<!--    --><?php //} ?>
</section>
</body>
</html>