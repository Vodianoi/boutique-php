<h1>Latest products</h1>
<?php foreach ($products as $product): ?>
    <div class="blog-post">
        <a href="?action=product&id=<?= $product['id'] ?>"><h2><?= $product['title']; ?></h2></a>
        <p><strong>Price:</strong> <?= $product['ttc']; ?></p>
    </div>
<?php endforeach ?>

