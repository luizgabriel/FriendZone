<?php

/** @var \Illuminate\Routing\Router $router */

$router->group(['middleware' => 'guest'], function () use ($router) {

    $router->get('/', 'Auth\AuthController@getLogin');

});

$router->controller('/auth', 'Auth\AuthController');
