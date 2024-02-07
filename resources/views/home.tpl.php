<div class="container">
    <h1 class="mt-5">Latest Products</h1>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://placehold.co/100x100/" alt="Product Image" class="card-img-top">
                    <div class="card-body">
                        <a href="?action=product&id=<?= $product['id'] ?>">
                            <h2 class="card-title"><?= $product['title']; ?></h2>
                        </a>
                        <p class="card-text"><strong>Price:</strong> <?= $product['ttc']; ?>€</p>
                        <?php if ($product['stock'] != 0): ?>
                            <p class="card-text"><strong>Stock:</strong> <?= $product['stock']; ?></p>
                        <?php else: ?>
                            <p class="card-text"><strong>Out of stock</strong></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
