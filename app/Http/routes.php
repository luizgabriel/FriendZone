<?php

/** @var \Illuminate\Routing\Router $router */

$router->group(['middleware' => 'guest'], function () use ($router) {

    $router->get('/', 'Auth\AuthController@getLogin');
    $router->post('/auth/login', 'Auth\AuthController@postLogin');
    $router->get('register', 'Auth\AuthController@getRegister');
    $router->post('/auth/register', 'Auth\AuthController@postRegister');

});

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->resource('posts', 'PostsController', ['only' => ['index', 'store', 'show']]);
    $router->get('auth/logout', 'Auth\AuthController@logout');
<<<<<<< HEAD
    $router->resource('comments', 'CommentsController', ['only' => ['store']]);
=======
    $router->resource('comments', 'CommentsController', ['only' => ['store','destroy']]);  //'destroy','update'
>>>>>>> f3f30a056638a6037f4b68fe96314ed1ea2643c8

});