<div class="product-container" style="flex-direction: row-reverse; max-width: 1000px">
    <h2><?= $product['title'] ?></h2>
    <div class="product-details" style="align-self: flex-end;">
        <img src="https://placehold.co/200x200/" alt="Product Image" class="product-image">
        <div style="float: right">
            <p><?= $product['description'] ?></p>
            <p class="price"><?= $product['ttc'] ?>€</p>
            <form action="?action=cart" method="post">
                <label> Quantity
                    <input type="number" name="quantity" value="1"/>
                </label>
                <input id="id" name="id" type="hidden" value="<?= $product['id'] ?>"/>
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
