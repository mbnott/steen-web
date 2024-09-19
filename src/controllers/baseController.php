<?php

/**
 * Projet : steen-web
 * Auteur : Kevin FRRZR && Eden DNCSR
 * Date : 29.08.2024
 * Description : This BaseController file serves as a foundation for all controllers,
 * containing variables and methods that are commonly needed.
 * V1
 */

namespace Mbnot\SteenWeb\controllers;

use Slim\Views\PhpRenderer;

class baseController
{
    protected PhpRenderer $views;

    public function __construct()
    {
        $this->views = new PhpRenderer(__DIR__ . '/../../views', ['title' => 'Spectacle']);
        $this->views->setLayout("layout.php");
    }
}