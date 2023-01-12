<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;

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
    return view('welcome');
});

Route::get('/estoque', 'App\Http\Controllers\EstoqueController@index');

Route::get('/estoque/inserir_produto', 'App\Http\Controllers\EstoqueController@inserir_produto');

Route::get('/estoque/insere_novo_produto', 'App\Http\Controllers\EstoqueController@insere_novo_produto');

