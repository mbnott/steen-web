<?php

namespace mbnot\steen-web\controllers;

use Slim\Views\PhpRenderer;

class BaseController
{
    protected PhpRenderer $views;

    public function __construct()
    {
        $this->views = new PhpRenderer(__DIR__ . '/../../views', ['title' => 'Spectacle']);
        $this->views->setLayout("layout.php");
    }
}