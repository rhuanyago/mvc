<?php

require __DIR__.'/vendor/autoload.php';


use \App\Http\Router;
use \App\Utils\View;
use \WilliamCosta\DotEnv\Environment;

//CARREGA VARIÁVEIS DE AMBIENTE
Environment::load(__DIR__);

define('URL', 'http://localhost/mvc');

//DEFINE O VALOR PADRÃO DAS VARIÁVEIS
View::init([
    'URL' => URL
]);

//INICIA O ROUTER
$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

//IMPRIME O RESPONSE DA ROTA
$obRouter->run()
         ->sendResponse();

// echo "<pre>";
// print_r($obRouter);
// echo "</pre>";

// exit;

// echo Home::getHome();