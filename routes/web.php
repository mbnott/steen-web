<?php

$app;
require '../vendor/autoload.php';

use Mbnot\SteenWeb\controllers\indexController;
use Mbnot\SteenWeb\controllers\loginController;
use Mbnot\SteenWeb\controllers\searchController;

// page Home
$app->get('/', [indexController::class, 'welcome']);

// page Login
$app->get('/login', [loginController::class, 'show']);

// page Search
$app->get('/search', [searchController::class, 'show']);