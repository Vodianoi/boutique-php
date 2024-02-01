<div class="container">
    <h1>Latest Products</h1>

    <div class="product-container">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <img src="https://placehold.co/100x100/" alt="Product Image" class="product-image">
                <a href="?action=product&id=<?= $product['id'] ?>">
                    <h2><?= $product['title']; ?></h2>
                </a>
                <p><strong>Price:</strong> <?= $product['ttc']; ?></p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        <?php endforeach ?>
    </div>
</div>
