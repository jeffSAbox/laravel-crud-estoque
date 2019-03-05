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

Route::get('/', function () {
    //return view('welcome');
    return redirect()->action("ProdutoController@listar");
});


//	CRUD DE PRODUTO
Route::get('/produtos/novo', "ProdutoController@cadastrar");
Route::post('/produtos/gravar', "ProdutoController@gravar");

//Route::get('/produtos', ['middleware'=>'autorizacaoLogin','uses'=>"ProdutoController@listar"]);
Route::get('/produtos', 'ProdutoController@listar');

Route::get('/produtos/detalhe/{id?}', "ProdutoController@detalhe");

Route::get('/produto/remove/{id}', "ProdutoController@remove");

Route::get('/produto/alterar/{id}', "ProdutoController@alterar");
Route::post('/produto/gravarAlteracoes', "ProdutoController@gravarAlteracoes");
//-----

//	RETORNO JSON
Route::get('/produtos/listarJSON','ProdutoController@listarJSON');
//-----	

//	RETORNO JSON
Route::get('/wallpaper','ProdutoController@baixarWallpaper');
//-----	

//Route::get('/home','LoginController@home');

Route::get('/login','LoginController@login');

Route::get('/logar','LoginController@logar');

Route::get('/home','LoginController@home');

Route::get('/logout','LoginController@logout');
