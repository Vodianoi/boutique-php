<div class="container">
    <h1>Latest Products</h1>

    <div class="product-container">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <img src="https://placekitten.com/100/100/" alt="Product Image" class="product-image">
                <a href="?action=product&id=<?= $product['id'] ?>">
                    <h2><?= $product['title']; ?></h2>
                </a>
                <p><strong>Price:</strong> <?= $product['ttc']; ?>€</p>
                <?php if ($product['stock'] != 0): ?>
                    <p><strong>Stock:</strong> <?= $product['stock']; ?></p>
                <?php else: ?>
                    <p><strong>Out of stock</p>
                <?php endif; ?>
            </div>
        <?php endforeach ?>
    </div>
</div>
