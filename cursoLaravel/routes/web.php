<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos/{id?}', function($id = "id não identificado"){
    return "contatos = $id";
});

Route::post('/contatos', function(){
    dd($_POST);
    return "contatos Post";
});

Route::put('/contatos', function(){
    return "contatos Put";
});
