<?php

use \App\Http\Controllers\clientesController;
use Illuminate\Support\Facades\Route;

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

/*Rotas de cliente*/

Route::get('/', 'clientesController@index');
Route::get('/clientes', 'clientesController@index');
Route::delete('/delete/{id}', 'clientesController@delete');
Route::get('/editar_cliente/{id}', 'clientesController@editar');
Route::post('update/{id}', 'clientesController@update');
/*Rotas de cliente*/

/*Rotas de pedidos*/
Route::get('/pedidos', 'pedidosController@index');
/*Rotas de cliente*/
