
<form class="update-product-form" action="?action=updateProduct&id=<?= $product['id'] ?>" method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?= $product['title'] ?>" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4"><?= $product['description'] ?></textarea>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" min="0" onchange="updateTTC()" value="<?= $product['price'] ?>" required>

    <label for="weight">Weight (kg):</label>
    <input type="number" id="weight" name="weight" step="0.01" min="0" value="<?= $product['weight'] ?>">

    <label for="tax">Tax:</label>
    <input type="number" id="tax" name="tax" step="0.01" min="0" onchange="updateTTC()" value="<?= $product['tax'] ?>">

    <label for="ttc">Total Price (Tax included):</label>
    <input type="number" id="ttc" name="ttc" step="0.01" min="0" readonly>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" min="0" value="<?= $product['stock'] ?>" required>

    <input id="id" name="id" type="hidden" value="<?= $product['id'] ?>"/>
    <label for="category">Category:</label>
    <select name="category" id="category">
        <?php foreach($categories as $category): ?>
            <option value="<?= $category['name'] ?>" <?php if(isset($productCategory) && is_string($productCategory) && $category['name'] == $productCategory): ?> selected <?php endif; ?>><?= ucfirst($category['name']) ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Update Product</button>
</form>
<script type="text/javascript">
    function updateTTC() {
        let price = Number(document.getElementById('price').value);
        let tax = Number(document.getElementById('tax').value);
        document.getElementById('ttc').value = (price * (1 + tax / 100)).toFixed(2);
    }
    updateTTC();
</script>
