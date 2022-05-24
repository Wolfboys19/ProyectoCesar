<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/hola', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo', function(){
    return 'Hola, mi nombre es Adair';
});

$router->post('/saludo', function(){
    return 'Que hubo pinche perro';
});

$router->put('/saludo', function(){
    return 'Ya no hay saludo';
});

$router->delete('/saludo', function(){
    return 'Se murio';
});
