<div class="product-container" style="flex-direction: row-reverse; max-width: 1000px">
    <h2><?= $product['title'] ?></h2>
    <div class="product-details" style="align-self: flex-end;">
        <img src="https://placekitten.com/200/200/" alt="Product Image" class="product-image">
        <div style="float: right">
            <p><?= $product['description'] ?></p>
            <p class="price">Price: <?= $product['ttc'] ?>€</p>
            <?php if ($product['stock'] != 0): ?>
                <p class="price">In stock: <?= $product['stock'] ?></p>
            <?php else: ?>
                <p><strong>Out of stock</p>
            <?php endif; ?>
            <form action="?action=cart" method="post">
                <label> Quantity
                    <input type="number" name="quantity" value="1"/>
                </label>
                <input id="id" name="id" type="hidden" value="<?= $product['id'] ?>"/>
                <button type="submit" class="add-to-cart">Add to Cart</button>
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                    <a class="add-to-cart" href="?action=deleteProduct&id=<?= $product['id'] ?>">Delete</a>
                    <a class="add-to-cart" href="?action=updateProduct&id=<?= $product['id'] ?>">Update</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
