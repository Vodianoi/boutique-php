<div class="container">
    <?php if (empty($productQuantities)): ?>
        <h1>PANIER VIDE (empty) !!!!!!!!!</h1>
    <?php else: ?>
        <form method="post">

            <h1>Cart</h1>
            <table class="cart-table">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($productQuantities as $id => $quantity): ?>
                    <?php $product = getProduct($pdo, $id) ?>
                    <tr>
                        <td><img src="https://placehold.co/50x50/" alt="Product Image"></td>
                        <td><?= $product['title'] ?></td>
                        <td><?= $product['ttc'] ?>€</td>
                        <td>
                            <label>
                                <input type="number" name="quantity_<?= $product['id'] ?>"
                                       value="<?= $quantity ?>" style="max-width: 50px">
                            </label>
                        </td>
                        <td><?= $product['ttc'] * $quantity ?>€</td>
                        <td>
                            <a class="add-to-cart" href="?action=cartDelete&id=<?= $product['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <!-- Add a horizontal line between each item -->
                    <tr class="cart-item-divider">
                        <td colspan="5"></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <div class="total-cart-container">
                <h3>Total : <?= $totalCart['total'] ?>€</h3>
            </div>

            <input class="add-to-cart" style="align-self: flex-start" type="submit" name="reset"
                   value="Empty cart"/>

            <input class="add-to-cart" style="align-self: flex-end" type="submit" name="update"
                   value="Update quantities">
            <a class="add-to-cart" style="align-self: flex-end" href="?action=command">Checkout</a>
        </form>
    <?php endif; ?>
</div>