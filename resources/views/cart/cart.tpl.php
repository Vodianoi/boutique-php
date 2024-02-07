<?php
echo 'test cart.tpl' . '<br \>';
?>

<section class="cart">

    <?php if (!isset($_SESSION['cart'])) { ?>
        <h1>Your cart is empty</h1>
    <?php } else { ?>
        <h1>Your cart</h1>
        <div class="cart-header">
            <div class="cart-column">Product</div>
            <div class="cart-column">Price unit</div>
            <div class="cart-column">Quantity</div>
            <div class="cart-column">Total</div>
        </div>
        <?php foreach ($_SESSION['cart'] as $id => $quantity) : ?>
            <?php if (isset($_SESSION['cart'][$id])): ?>
                <?php $product = productDetails($pdo, $id) ?>
                <div class="cart-item">
                    <img src="https://placekitten.com/50/50" alt="Image du Produit" class="product-image-cart">
                    <div class="product-info">
                        <h2 class="product-title"><?= $product['title'] ?></h2>
                    </div>
                    <div class="cart-column">
                        <div class="price-unit"><?= $product['ttc'] ?> €</div>
                    </div>
                    <form action="/index.php?action=cart" method="POST">
                        <div class="cart-column">
                            <label for="quantity">Quantité:</label>
                            <input type="number" class="quantity" id="quantity" name="quantity[<?= $id ?>]" min="0"
                                   value="<?= $quantity ?>">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit" name="update_cart">Update the cart</button>
                        </div>
                        <div class="cart-column">
                            <button type="submit" name="delete_product" value="<?= $id ?>">X</button>
                        </div>
                    </form>

                    <div class="cart-column">
                        <div class="total"><?= $product['ttc'] * $quantity; ?> €</div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class="cart-total">
            <div>Total of all: <span><?= $result['total'] ?> €</span></div>
        </div>
        <div class="cart-footer">
            <button class="validate-btn">Valid the cart</button>
        </div>
    <?php } ?>
</section>

