<?php

/**
 * Projet : steen-web
 * Auteur : Kcram && Mbnot
 * Date : 10.10.2024
 * Description : This search file manages the requests between the view and the model,
 * serving as the central point of the site web  
 * V1
 */

namespace Mbnot\SteenWeb\controllers;

use Mbnot\SteenWeb\controllers\baseController;
use Mbnot\SteenWeb\models\ApiManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class searchController extends baseController
{
    /**
     * @param Request $request 
     * @param Response $response 
     * @param array $args 
     * @return ResponseInterface 
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        // Construire le contenu de la page
        return $this->views->render($response, 'search/show.php');
    }
}