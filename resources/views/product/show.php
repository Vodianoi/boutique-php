<div class="product-container">
    <h2><?= $product['title'] ?></h2>
    <img src="https://placehold.co/200x200/" alt="Product Image" class="product-image">
    <div class="product-details">
        <p><?= $product['description'] ?></p>
        <p class="price"><?= $product['ttc'] ?>€</p>
        <form action="?action=cart" method="post">
            <label> Quantity
                <input type="number" name="quantity" value="1"/>
            </label>
            <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
    </div>
</div>
