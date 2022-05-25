<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use PhpParser\Node\Stmt\ElseIf_;

$router->get('/hola/{edad}', function ($edad) {
    if ($edad > 0 && $edad < 18) {
        return "Mi compita es ilegal";
    } elseif ($edad >= 18 && $edad <= 100) {
        return "Mi compita es legal";
    } else {
        return "Tu edad esta mal";
    }
});

$router->get('/saludo', function () {
    return 'Hola, mi nombre es Adair';
});

$router->post('/saludo', function () {
    return 'Que hubo pinche perro';
});

$router->put('/saludo', function () {
    return 'Ya no hay saludo';
});

$router->delete('/saludo', function () {
    return 'Se murio';
});
