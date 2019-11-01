<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/////////////////////////////////////////////////////////////////////////////
// rota de acesso login 
route::get('/', 'contatoController@login');
// validar login
route::POST('validandoLogin','contatoController@validandoLogin');
// tela cadastro usuario
route::get('cadastroUsuario','contatoController@cadastroUsuario');
// validando o cadastro
route::post('validarCadastro', 'contatoController@validarCadastro');

/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//rota home
route::get('home','homeController@home');

/////////////////////////////////////////////////////////////////////////////
//routa cadastra contato
route::get('contato', function(){
    return view('contato');
});