<?php
namespace App\Router;

use Psr\Http\Message\ResponseInterface as Response;
use psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create(); 

$app->get("/", function(Request $request, Response $response, $args){
    
    $response->getBody()->write('Hello, user');
    return $response;
});

$app->run();
?>