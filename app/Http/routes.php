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


Route::get('/hola-mundo', function(){
    return 'Hola mundo!! Soy Fernando Avila';
});


Route::get('/contacto', function(){
    return view('contacto');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/about', function(){
    return view('about.about');
});