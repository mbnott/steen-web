<?php
global $app;
require '../vendor/autoload.php';

use Mbnot\SteenWeb\controllers\indexController;

// page Home
$app->get('/', [indexController::class, 'welcome']);