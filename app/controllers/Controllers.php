<?php

namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class Conversor 
{

    public function metodos(Request $request, Response $response, $args): Response
    {
        $metodos = array(
            ['metodo' => "RealDol", 'verbo' => "Get", 'descricao' => "Conversão de Real para Dólar"],
            ['metodo' => "DolarReal", 'verbo' => "Get", 'descricao' => "Conversão de Dlar para Real"],
            ['metodo' => "EuroReal", 'verbo' => "Get", 'descricao' => "Conversão de Euro para Real"],
            ['metodo' => "RealEuro", 'verbo' => "Get", 'descricao' => 'Conversão de Real para Euro']
        );

        $response->getBody()->write(json_encode($metodos));
        return $response;
    }

    public function VerMetodo(Request $request, Response $response, $args): Response 
    {
        $response->getBody()->write("passou");
        return $response;
    }

    private function RealDol()
    {
        // exchange(cambio), montante, from, to, rate
        
    }

    private function DolarReal()
    {

    }
    
    private function EuroReal()
    {

    }
    
    private function RealEuro()
    {

    }
    
}

?>