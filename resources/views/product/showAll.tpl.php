<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
</head>

<?php echo 'test showAll.tpl' . '<br \>'; ?>

<?php foreach ($lastBoutiqueProducts as $post) : ?>
    <div class="lastBoutiqueProducts">
        <section>
            <article>
                <a href="/index.php?action=showProduct&id=<?= $post['id']?>">
                    <h2><?= $post['title'] ?></h2></a>
                <p><?= $post['description'] ?></p>
                <h5><?= $post['price'] ?></h5>
            </article>
        </section>
    </div>
<?php endforeach; ?>

</html>