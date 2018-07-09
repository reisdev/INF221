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


use App\Http\Controllers\ControllerDisciplina;
use App\Http\Controllers\ControllerAvaliacoes;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('csrf', function() {
    return Session::token();
});

Route::group(array("prefix" => "api"), function(){
    Route::get('disciplinas','ControllerDisciplina@index');
    Route::post('disciplinas','ControllerDisciplina@insert');
    Route::get('avaliacoes','ControllerAvaliacoes@index');
    Route::get('avaliacoes/disciplina/{id}','ControllerAvaliacoes@porDisciplina');
    Route::get('avaliacoes/usuario/{id}','ControllerAvaliacoes@porUsuario');
    Route::post('avaliacoes','ControllerAvaliacoes@insert');
    Route::get('reacoes',"ControllerReacoes@index");
    Route::post('reacoes',"ControllerReacoes@insert");
    Route::get('usuarios',"ControllerUsuario@index");
    Route::post('usuarios',"ControllerUsuario@insert");
});