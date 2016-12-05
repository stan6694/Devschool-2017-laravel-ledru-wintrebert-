<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
<<<<<<< HEAD
    return view('posts/create');
=======
    return view('posts');
});

Route::get('/events/create', function () {
    return view('events');
>>>>>>> 69d308494e1997a8f62d1f8ecd972b245a652860
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
