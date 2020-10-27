<?php

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

Route::get('/', function () {
    return view('index');
});

/*
Route::get("/alunos", function(){
    return view("alunos");
});
*/

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('index');
});

Route::group(['middleware'=>'auth'], function() {
    Route::get('/aluno', 'AlunoController@index')->name('aluno.home');
    Route::get('/aluno/edit/{id}', 'AlunoController@edit'); //chama o formulario
    Route::get('/aluno/remove/{id}', 'AlunoController@remove');
    Route::post('/aluno/search/', 'AlunoController@search');
    Route::post('/aluno/update/', 'AlunoController@update');
    Route::get('/aluno/create', 'AlunoController@create'); //carrega o formulário
    Route::post('/aluno/store', 'AlunoController@store'); //salvar os dados do formulário

    Route::get('/curso', 'CursoController@index')->name('curso.home');
    Route::get('/curso/create', 'CursoController@create'); //carrega o formulário
    Route::post('/curso/store', 'CursoController@store'); //salvar os dados do formulário
    Route::get('/curso/edit/{id}', 'CursoController@edit');
    Route::get('/curso/remove/{id}', 'CursoController@remove');
    Route::post('/curso/update/', 'CursoController@update');
    Route::post('/curso/search/', 'CursoController@search');

    Route::get('/turma', 'TurmaController@index')->name('turma.home');
    Route::get('/turma/create', 'TurmaController@create'); //carrega o formulário
    Route::post('/turma/store', 'TurmaController@store'); //salvar os dados do formulário
    Route::get('/turma/edit/{id}', 'TurmaController@edit');
    Route::get('/turma/remove/{id}', 'TurmaController@remove');
    Route::post('/turma/update/', 'TurmaController@update');
    Route::post('/turma/search/', 'TurmaController@search');

//    Route::resource('turma', 'TurmaController');
});

