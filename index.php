<?php

// require __DIR__.'/boott/autoload.php';
require __DIR__.'/bootstrap/app.php';

use \App\Http\Router;

//INICIA O ROUTER
$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

include __DIR__ . '/routes/admin.php';

//IMPRIME O RESPONSE DA ROTA
$obRouter->run()
         ->sendResponse();

