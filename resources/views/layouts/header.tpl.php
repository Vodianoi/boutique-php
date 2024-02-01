<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title><?= $metaTitle ?? 'Boutique' ?></title>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="/">Boutique</a>
        </div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="?action=signin">Sign in</a></li>
            <li><a href="?action=login">Log in</a></li>
        </ul>
    </nav>
</header>