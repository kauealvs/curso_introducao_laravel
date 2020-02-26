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
/*
Route::post('/contatos', function(){
    dd($_POST);
    return "contatos Post";
});

Route::put('/contatos', function(){
    return "contatos Put";
});
*/
route::get('/contatos/{id?}', ['uses'=>'contatosController@index']);

route::post('/contatos', ['uses'=>'contatosController@criar']);

route::put('/contatos', ['uses'=>'contatosController@editar']);

route::get('/admin/cursos', ['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

