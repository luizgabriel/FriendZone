<?php

/** @var \Illuminate\Routing\Router $router */

$router->group(['middleware' => 'guest'], function () use ($router) {

    $router->get('/', 'Auth\AuthController@getLogin');
    $router->get('/auth/login', 'Auth\AuthController@getLogin');
    $router->post('/auth/login', 'Auth\AuthController@postLogin');
    $router->get('/auth/register', 'Auth\AuthController@getRegister');
    $router->post('/auth/register', 'Auth\AuthController@postRegister');

});

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->resource('posts', 'PostsController', ['only' => ['index', 'store', 'show','destroy']]);//'update'
    $router->resource('friends', 'FriendsController', ['only' => ['index']]);
    $router->get('auth/logout', 'Auth\AuthController@logout');
    $router->resource('comments', 'CommentsController', ['only' => ['store','destroy']]);  //'destroy','update'
    $router->resource('posts.comments', 'CommentsController', ['only' => ['index']]);

    $router->get('users/search', 'UsersController@search');

    $router->get('profile', 'UsersController@profile');
    $router->get('profile/{users}', ['as' => 'users.show', 'uses' => 'UsersController@show']);
    $router->put('profile/update', ['as' => 'users.update', 'uses' => 'UsersController@updateProfile']);
    $router->post('requests/{users}/answer', ['as' => 'friendrequests.answer', 'uses' => 'FriendRequestController@answer']);
    $router->post('profile/{users}/request', ['as' => 'friendrequest.store', 'uses' => 'FriendRequestController@store']);
    
});
