<div class="container">
    <h1>Cart</h1>

    <table class="cart-table">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php for($i = 0; $i < count($productsInCart); $i++): ?>
            <tr>
                <td><img src="https://placehold.co/50x50/" alt="Product Image"></td>
                <td><?= $productsInCart[$i]['title']?></td>
                <td><?= $productsInCart[$i]['ttc']?>€</td>
                <td><?= $quantities[$i]?></td>
                <td><?= $productsInCart[$i]['ttc']*$quantities[$i]?>€</td>
            </tr>
            <!-- Add a horizontal line between each item -->
            <tr class="cart-item-divider">
                <td colspan="5"></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
    <div class="total-cart-container">
        <h3>Total : <?= $totalCart['total'] ?>€</h3>
    </div>

    <form method="post">
        <input type="submit" name="reset"
               value="Reset"/>
    </form>
</div>