<div class="container">
    <form action="?action=updateProduct" method="post">

        <h1>Cart</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cart as $product): ?>
                    <tr>
                        <td><img src="https://placehold.co/50x50/" alt="Product Image"></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['priceTtc'] ?>€</td>
                        <td>
                            <input type="number" name="quantity[<?= $product['id'] ?>]"
                                   value="<?= $product['quantity'] ?>" min="1" class="form-control" style="max-width: 100px">
                        </td>
                        <td><?= $product['priceTtc'] * $product['quantity'] ?>€</td>
                        <td>
                            <a class="btn btn-danger" href="?action=cartDelete&id=<?= $product['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <!-- Add a horizontal line between each item -->
                    <tr class="cart-item-divider">
                        <td colspan="6"></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4">
                <h3>Total : <?= $totalCart['total'] ?>€</h3>
            </div>
            <div class="col-md-8">
                <input class="btn btn-secondary mr-2" type="submit" name="reset" value="Empty cart"/>
                <input class="btn btn-primary mr-2" type="submit" name="update" value="Update quantities">
                <a class="btn btn-success" href="?action=command">Checkout</a>
            </div>
        </div>
    </form>
</div>
