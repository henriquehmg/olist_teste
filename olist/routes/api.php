<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/tipo_produto')->group(function(){
    Route::get('/', 'App\Http\Controllers\TiposProdutosController@index')->name('get_all_tipos_produto');
    Route::get('/{id}', 'App\Http\Controllers\TiposProdutosController@show')->name('get_sigle_tipos_produto');
    Route::post('/', 'App\Http\Controllers\TiposProdutosController@store')->name('new_tipos_produto');
    Route::put('/{id}', 'App\Http\Controllers\TiposProdutosController@update')->name('update_tipos_produto');
    Route::delete('/{id}', 'App\Http\Controllers\TiposProdutosController@delete')->name('delete_tipos_produto');
});

Route::prefix('/produto')->group(function(){
    Route::get('/', 'App\Http\Controllers\ProdutosController@index')->name('get_all_produto');
    Route::get('/{id}', 'App\Http\Controllers\ProdutosController@show')->name('get_sigle_produto');
    Route::post('/', 'App\Http\Controllers\ProdutosController@store')->name('new_produto');
    Route::put('/{id}', 'App\Http\Controllers\ProdutosController@update')->name('update_produto');
    Route::delete('/{id}', 'App\Http\Controllers\ProdutosController@delete')->name('delete_produto');
});
