<?php
if(isset($_SESSION['cart']))
{
    require_once('../app/persistences/cart.php');
    require_once('../app/persistences/product.php');
    $_SESSION['total'] = totalCart($pdo, $_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?= $metaTitle ?? 'Boutique' ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
<header class="bg-secondary py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a class="navbar-brand text-light fw-bold" href="/">Boutique</a>
            </div>
            <div>
                <!-- Cart icon with badge -->
                <a class="navbar-brand text-light" href="?action=cart">
                    <img src="img/cart.svg" alt="cart" style="height: 30px; width: 30px">
                    <?php if (isset($_SESSION['cart']) && $_SESSION['total']['count'] > 0): ?>
                        <span class="badge bg-danger"><?= $_SESSION['total']['count'] ?></span>
                    <?php endif; ?>
                </a>
                <?php if (isset($_SESSION['logged'])): ?>
                    <div class="card bg-light mt-3">
                        <div class="card-body">
                            <h5 class="card-title">User Info</h5>
                            <p class="card-text">Mail: <?= $_SESSION['email'] ?? '' ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=cart">Cart</a>
                </li>
                <?php if(isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=fakeCart">Fake Cart</a>
                    </li>
                <?php endif; ?>
                <?php if (!isset($_SESSION['logged'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=signin">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=customerLogin">Log in</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=customerDisconnect">Disconnect</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
