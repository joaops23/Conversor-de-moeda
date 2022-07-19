<?php

namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class Conversor 
{
    private $data; //Armazena os args da requisição
    private $moeda;


    public function __construct(){
        $this->moeda = ['EUR' => "EU$", "BRL" => "BR$", "USD" => "US$"];
    }
    public function getData(){
        return $this->data;
    }

    public function setData($args){
        if(isset($args)){
            $this->data = $args;
        }
        
    }

    public function getSimbolo($moeda){
        return $this->moeda[$moeda];
    }

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

    public function process(Request $request, Response $response, $args)
    {
        if(isset($args)){
            $this->setData($args);
        }

        $args = $this->getData();

        $exchange = $this->Conversao($args['amount'], str_replace(",",".",$args['rate']));

        $moeda = $this->getSimbolo($args['to']);

        $resposta = [
            "valorConvertido" => $exchange,
            "simboloMoeda"=> $moeda
        ];
        $response->getBody()->write(json_encode($resposta));
        return $response
                ->withStatus(201);

    }

    private function Conversao($amount, $rate)
    {
        $return = $amount * $rate;
        return $return;
    }
    
}

?>