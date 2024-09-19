<?php

/**
 * Projet : steen-web
 * Auteur : ***REMOVED*** && ***REMOVED***
 * Date : 29.08.2024
 * Description : This IndexController file manages the requests between the view and the model,
 * serving as the central point of the site web  
 * V1
 */

namespace Mbnot\SteenWeb\controllers;

use Mbnot\SteenWeb\Controllers\baseController;
use Mbnot\SteenWeb\Models\ApiManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class indexController extends baseController
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