# Conversor-de-moeda

## Objetivo

<p align='center'>
  Construir uma api REST que consiga realizar a conversão de moedas.
</p>

## URL de requisição 

* <a href="#">http://localhost:8000/exchange/{amount}/{from}/{to}/{rate}</a>
* <a href="#">http://localhost:8000/exchange/10/BRL/USD/4.50

## Formato da resposta
 ~~~ JSON
 {
  "valorConvertido": 45,
  "simboloMoeda": "$"
 }
 ~~~

## Conversões / EndPoints

* De Real para Dólar
* De Dólar para Real
* De Real para Euro
* De Euro para Real

## Dicas 

* Para Subir servidor embutido do PHP 
> PHP php -S localhost:8000 index.php

## Tecnologias utilizadas
PHP 8.0.17
Slim Framework
