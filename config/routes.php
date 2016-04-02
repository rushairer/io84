<?php
$route = new Route;

$route->respond('GET','/', function () use ($route){
    $route->make('App\Controllers\HomeController')->home();
});

$route->respond('GET','/demo', function () use ($route){
    $route->make('App\Controllers\HomeController')->demo();
});

$route->onHttpError(function ($code, $route) {
    if ($code >= 400 && $code < 500) {
        $route->response()->body(
            'Oh no, a bad error happened that caused a '. $code
        );
    } elseif ($code >= 500 && $code <= 599) {
        error_log('uhhh, something bad happened');
    }
});

$route->dispatch();
