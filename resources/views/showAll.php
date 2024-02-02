<html>
<?php foreach ($product as $row) : ?>
<div class="LastProduct">
    <section>
        <article>
            <img src="/img/200.svg" alt="placeholder">
            <a href="/index.php?action=showproduct&id=<?= $row['id']?>"
            <h2><?= $row['title']?></h2></a>
            <p>
                <?= $row['description']?>
            </p>
            <h5>
                <?= $row['ttc']?>
            </h5>
            <form method="post" action="/index.php?action=showproduct&id=<?= $row['id']?>">
                <input type="submit" value="Click ici" />
            </form>
        </article>
    </section>
</div>

<?php endforeach; ?>
</html>

