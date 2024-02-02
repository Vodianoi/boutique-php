<?php

$allProduct = getAllProducts($pdo);

if (!empty($allProduct)):
    foreach ($allProduct as $value): ?>
        <div class="homepage">
            <img src="/img/200.svg" alt="placeholder">
            <br>
            <a href="?action=product&id=<?= $value['id'] ?>">
                <?= $value['title'] ?>
            </a>
            <br> <?= $value['description'] ?>;
            <br> <?= $value['ttc'] ?>;
            <br> <?= $value['stock'] ?>;
        </div>
    <?php endforeach;
endif;
