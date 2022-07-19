<?php 

namespace Router;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Controllers\Conversor;


$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->get('/', [Conversor::class, "metodos"]);

$app->get("/exchange/{amount}/{from}/{to}/{rate}", [Conversor::class, 'process']);

$app->run();
?>