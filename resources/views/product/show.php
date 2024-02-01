<?php



if (!isset($getproduct_id)) {
    echo "Mauvais produit !";
} else {
    foreach ($getproduct_id as $row) {

        $metaTitle = $row["title"];
        $metaDescription = $row["description"];
        include '../resources/views/layouts/header.tpl.php';
        echo $row["title"] . "     <br>";
        echo $row["description"] . "     <br>";
        echo $row["ttc"] . "     <br>";}
}
;?>

    <html>
    <div clas="formArticle">
        <form action="cart" method="post">
            <input type="number" id="quantity" name="quantity">
            <label for="quantity">Combien ?</label>
            <button type="submit" name="buy">Ajoutez au panier</button>
        </form>
    </div>
    </html>

<?php include '../resources/layouts/footer.tpl.php'; ?>