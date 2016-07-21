<?php

/** @var \Illuminate\Routing\Router $router */

$router->group(['middleware' => 'guest'], function () use ($router) {

    $router->get('/', 'Auth\AuthController@getLogin');
    $router->post('/auth/login', 'Auth\AuthController@postLogin');
    $router->get('register', 'Auth\AuthController@getRegister');
    $router->post('/auth/register', 'Auth\AuthController@postRegister');

});

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->resource('posts', 'PostsController');
    $router->get('auth/logout', 'Auth\AuthController@logout');
    $router->resource('user', 'UserController');
    $router->get('profile/{id?}', 'UserController@show');
    $router->put('profile/update', 'UserController@updateProfile');

});

