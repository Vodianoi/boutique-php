<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?= $product['title'] ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://placehold.co/200x200/" alt="Product Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p><?= $product['description'] ?></p>
                            <p class="price">Price: <?= $product['ttc'] ?>€</p>
                            <?php if ($product['stock'] != 0): ?>
                                <p class="price">In stock: <?= $product['stock'] ?></p>
                            <?php else: ?>
                                <p><strong>Out of stock</strong></p>
                            <?php endif; ?>
                            <form action="?action=cart" method="post" class="mb-3">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="1">
                                </div>
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <button type="submit" class="btn btn-primary mr-2">Add to Cart</button>
                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                                    <a href="?action=deleteProduct&id=<?= $product['id'] ?>" class="btn btn-danger mr-2">Delete</a>
                                    <a href="?action=updateProduct&id=<?= $product['id'] ?>" class="btn btn-secondary">Update</a>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
