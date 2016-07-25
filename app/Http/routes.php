<?php

/** @var \Illuminate\Routing\Router $router */

$router->group(['middleware' => 'guest'], function () use ($router) {

    $router->get('/', 'Auth\AuthController@getLogin');
    $router->post('/auth/login', 'Auth\AuthController@postLogin');
    $router->get('register', 'Auth\AuthController@getRegister');
    $router->post('/auth/register', 'Auth\AuthController@postRegister');

});

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->resource('posts', 'PostsController', ['only' => ['index', 'store', 'show']]);//'update'
    $router->get('auth/logout', 'Auth\AuthController@logout');
    $router->resource('comments', 'CommentsController', ['only' => ['store','destroy']]);  //'destroy','update'

});
