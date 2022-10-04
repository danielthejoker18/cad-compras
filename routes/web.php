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

Route::get('/', 'clientesController@index');
Route::get('/clientes', 'clientesController@index');
Route::delete('/delete/{id}', 'clientesController@delete');
Route::get('/editar_cliente', function () {
    return view('editar_cliente');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/pedidos', function () {
    return view('pedidos');
});
