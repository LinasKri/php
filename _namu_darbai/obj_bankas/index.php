<?php
define('ENTER', true);
require __DIR__.'/bootstrap.php';

// controller
require DIR.'app/FundController.php';


$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);

_d($uri);

// ROUTER

if ($uri[0]== 'testas' && isset($uri[1])) {
    (new FundController) -> fundTest($uri[1]);
}


else {
    http_response_code(404);
    echo '<h1>404 PAGE NOT FOUND!🤷‍♂️';
}