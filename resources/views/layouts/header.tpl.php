<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet"/>
    <title><?= $metaTitle ?? 'Boutique' ?></title>
</head>
<body>
<header>
    <div class="title-head">
        <div class="logo">
            <a href="/">Boutique</a>
        </div>
        <?php if (isset($_SESSION['cart'])): ?>
            <div class="header-cart">
                <h2>Cart</h2>
                <p>Total cart : <?= $_SESSION['total']['total'] ?> €</p>
                <p><?= $_SESSION['total']['count'] ?> products</p>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['logged'])): ?>
            <div style="border: black thick double; max-height: 100px">
                <p>Mail : <?= $_SESSION['email'] ?? '' ?></p>
            </div>
        <?php endif; ?>
    </div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="?action=cart">Cart</a></li>
            <li><a href="?action=fakeCart">Fake Cart</a></li>
            <?php if (!isset($_SESSION['logged'])): ?>
                <li><a href="?action=signin">Sign in</a></li>
                <li><a href="?action=customerLogin">Log in</a></li>
            <?php else: ?>
                <li><a href="?action=customerDisconnect">Disconnect</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>