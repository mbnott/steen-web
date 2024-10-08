<?php

$app;
require '../vendor/autoload.php';

use Mbnot\SteenWeb\controllers\indexController;
use Mbnot\SteenWeb\controllers\loginController;

// page Home
$app->get('/', [indexController::class, 'welcome']);

// page Login
$app->get('/login', [loginController::class, 'show']);