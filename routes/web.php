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

Route::get('admin', function(){
    return "Admin";
});

Route::get('login', function(){
    return "Login";
});

Route::get('pagina_principal', ['as'=>'paginaPrincipal', 'uses'=>'PaginaPrincipalController@index']);
Route::get('login', ['as'=>'login','uses'=>'LoginController@index']);
Route::get('cadastroCliente', ['as'=>'cadastroCliente','uses'=>'CadastroClienteController@index']);

// Route::get('/cadastro_cliente', ['as'=>'cadastroCliente', 'uses'=>'CadastroClienteController@index']);
// Route::post('cadastro_cliente', ['uses'=>'CadastroClienteController@criar']);
// Route::put('cadastro_cliente', ['uses'=>'CadastroClienteController@editar']);

// Route::get('adimplentes/{id_cliente?}', function($id_cliente = null){
//     return "Adimplentes";
// });

// Route::get('inadimplentes/{id_cliente?}', function($id_cliente = null){
//     return "Inadimplentes";
// });
