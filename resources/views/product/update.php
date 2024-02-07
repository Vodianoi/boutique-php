<div class="container">
    <div class="row justify-content-center border rounded mx-2 pt-5 pb-5">
        <div class="col-md-8">
            <form class="update-product-form" action="?action=updateProduct&id=<?= $product['id'] ?>" method="POST">
                <div class="form-group mb-2">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $product['title'] ?>" required>
                </div>

                <div class="form-group mb-2">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4"><?= $product['description'] ?></textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" onchange="updateTTC()" value="<?= $product['price'] ?>" required>
                </div>

                <div class="form-group mb-2">
                    <label for="weight">Weight (kg):</label>
                    <input type="number" class="form-control" id="weight" name="weight" step="0.01" min="0" value="<?= $product['weight'] ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="tax">Tax:</label>
                    <input type="number" class="form-control" id="tax" name="tax" step="0.01" min="0" onchange="updateTTC()" value="<?= $product['tax'] ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="ttc">Total Price (Tax included):</label>
                    <input type="number" class="form-control" id="ttc" name="ttc" step="0.01" min="0" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="stock">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" min="0" value="<?= $product['stock'] ?>" required>
                </div>

                <input type="hidden" id="id" name="id" value="<?= $product['id'] ?>">

                <div class="form-group mb-2">
                    <label for="category">Category:</label>
                    <select class="form-control" name="category" id="category">
                        <?php foreach($categories as $category): ?>
                            <option value="<?= $category['name'] ?>" <?php if(isset($productCategory) && is_string($productCategory) && $category['name'] == $productCategory): ?> selected <?php endif; ?>><?= ucfirst($category['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Update Product</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function updateTTC() {
        let price = Number(document.getElementById('price').value);
        let tax = Number(document.getElementById('tax').value);
        document.getElementById('ttc').value = (price * (1 + tax / 100)).toFixed(2);
    }
    updateTTC();
</script>
