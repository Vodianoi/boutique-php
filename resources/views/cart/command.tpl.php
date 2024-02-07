<div class="container">
    <h1 class="mt-5">Command N°<?= $command[0]['orders_id'] ?></h1>
    <h3>Merci de votre commande <?= $_SESSION['firstname'] ?? getCustomerNameByCommandID($pdo, $command[0]['id']) ?? 'Anonymous'?>, maintenant payez !</h3>
    <br>
    <?php foreach ($command as $product): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title"><?= $product['title']; ?></h2>
                <p class="card-text">Description: <?= $product['description']; ?></p>
                <p class="card-text">Unit Price: <?= $product['ttc']; ?>€</p>
                <p class="card-text">Quantity: <?= $product['quantity']; ?></p>
                <p class="card-text">Total: <?= $product['ttc'] * $product['quantity']; ?>€</p>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="total-feedback">
        <h3>Total Commande: <?= $totalCommand['total']; ?>€</h3>
    </div>
</div>
