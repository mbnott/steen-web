<?php
global $app;
require '../vendor/autoload.php';

use mbnot\steenWeb\controllers\indexController;

// page Home
$app->get('/', [indexController::class, 'welcome']);