<section>
    <table>
        <tr>
            <th>Nom</th>
            <th>Quantité</th>
            <th>prix</th>
            <th>total</th>
        </tr>
        <?php foreach ($cart as $cartLine): ?>
        <tr>
            <td><?= $cartLine['name'] ?></td>
            <td><?= $cartLine['quantity'] ?></td>
            <td><?= $cartLine['priceTtc'] ?> €</td>
            <td><?= $cartLine['total'] ?> €</td>

        </tr>
        <?php endforeach; ?>
    </table>

<h3>Total du panier : <?= $totalCart['total']  ?> €</h3>
</section>
