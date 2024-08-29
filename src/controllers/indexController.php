<?php

namespace mbnot\steen-web\controllers;

use mbnot\steen-web\Controllers\BaseController;
use mbnot\steen-web\Models\ApiManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class IndexController extends BaseController
{
    /**
     * @param Request $request 
     * @param Response $response 
     * @param array $args 
     * @return ResponseInterface 
     */
    public function welcome(Request $request, Response $response, array $args): Response
    {
        // Construire le contenu de la page
        return $this->views->render($response, 'index/welcome.php', ["data" => ApiManager::fetchAll()]);
    }
}