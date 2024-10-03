<?php

/**
 * Projet : steen-web
 * Author : Kcram && Mbnot
 * Date : 19.09.2024
 * Description : This LoginController file manages the requests between the view and the model,
 * serving as the central point of the site web
 * V1
*/

namespace Mbnot\SteenWeb\controllers;

use Mbnot\SteenWeb\controllers\baseController;
use Mbnot\SteenWeb\models\ApiManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class loginController extends baseController
{
    /**
     * @param Request $request 
     * @param Response $response 
     * @param array $args 
     * @return ResponseInterface 
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        
        // Building the page content
        return $this->views->render($response, 'login/show.php');
    }
}
