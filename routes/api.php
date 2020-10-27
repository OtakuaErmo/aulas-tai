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

Route::post('/turma/store', 'Api\TurmaApiController@store'); //salvar os dados do formulário
Route::put('/turma/update/{id}', 'Api\TurmaApiController@update'); //atualizar os dados do formulário
Route::get('/turma', 'Api\TurmaApiController@index'); //listar os dados do formulário
Route::get('/turma/{id}', 'Api\TurmaApiController@show'); //listar os dados do id especifico
Route::delete('/turma/delete/{id}', 'Api\TurmaApiController@destroy'); //deleta os dados do id especifico
Route::post('/turma/search', 'Api\TurmaApiController@search'); //search dos dados passados por request
