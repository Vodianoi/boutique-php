<?php
require __DIR__ . '/../autoload.php';

(new App\Controller\DotEnvEnvironment)->load(__DIR__ . '/../');

require '../bootstrap/app.php';
require '../route/web.php';
