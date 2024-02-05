<div class="container">
    <h1>Command N°<?= $command[0]['orders_id'] ?></h1>
    <h3>Merci de votre commande, maintenant payez !</h3>
    <br>
    <?php foreach ($command as $product): ?>
        <div class="product-feedback">
            <h2><?= $product['title']; ?></h2>
            <p>Description: <?= $product['description']; ?></p>
            <p>Unit Price: <?= $product['ttc']; ?>€</p>
            <p>Quantity: <?= $product['quantity']; ?></p>
            <p>Total: <?= $product['ttc'] * $product['quantity']; ?>€</p>
        </div>
        <hr>
    <?php endforeach; ?>

    <div class="total-feedback">
        <h3>Total Commande: <?= $totalCommand['total']; ?>€</h3>
    </div>
</div>