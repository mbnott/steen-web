<?php

/**
 * Projet : steen-web
 * Auteur : Kevin FRRZR && Eden DNCSR
 * Date : 29.08.2024
 * Description : This IndexController file manages the requests between the view and the model,
 * serving as the central point of the site web  
 * V1
 */

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
        return $this->views->render($response, 'index/welcome.php', ["data" => []]);
    }
}