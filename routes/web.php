<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\UsuarioController@index')->name('login');

Route::post('/', 'App\Http\Controllers\UsuarioController@auth')->name('auth');

Route::get('/logout', 'App\Http\Controllers\UsuarioController@logout')->name('logout');
 

Route::get('/estoque', 'App\Http\Controllers\EstoqueController@index')->name('estoque');

Route::get('/estoque/inserir_produto', 'App\Http\Controllers\EstoqueController@inserir_produto');

Route::post('/estoque/insere_novo_produto', 'App\Http\Controllers\EstoqueController@insere_novo_produto');

Route::get('/estoque/editar/{id}', 'App\Http\Controllers\EstoqueController@editar');

Route::get('/estoque/editando_produto', 'App\Http\Controllers\EstoqueController@editando_produto');

Route::get('/estoque/excluir/{id}', 'App\Http\Controllers\EstoqueController@excluir');



