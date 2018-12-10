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

use Illuminate\Support\facades\Input;
use App\servidor;
use App\transporte;

//ROSTAS DE TECNICOS
Route::get('tecnico/index', 'tecnicoController@index')->name('tecnico.index');
Route::get('tecnico/criar', 'tecnicoController@create')->name('tecnico.criar');
Route::post('tecnico/salvar', 'tecnicoController@store')->name('tecnico.salvar');
Route::get('tecnico/mostrar', 'tecnicoController@show')->name('tecnico.mostrar');
Route::post('tecnico/atualizar/{id}', 'tecnicoController@update')->name('tecnico.atualizar');
Route::get('tecnico/editar/{id}', 'tecnicoController@edit')->name('tecnico.editar');

//ROSTAS DE PROFESSORES
Route::get('professor/index', 'professorController@index')->name('professor.index');
Route::get('professor/criar', 'professorController@create')->name('professor.criar');
Route::post('professor/salvar', 'professorController@store')->name('professor.salvar');
Route::get('professor/mostrar', 'professorController@show')->name('professor.mostrar');
Route::post('professor/atualizar/{id}', 'professorController@update')->name('professor.atualizar');
Route::delete('professor/remover/{id}', 'professorController@destroy')->name('professor.remover');
Route::get('professor/editar/{id}', 'professorController@edit')->name('professor.editar');

//ROSTAS DE MOTORISTAS
Route::get('motorista/index', 'motoristaController@index')->name('motorista.index');
Route::get('motorista/criar', 'motoristaController@create')->name('motorista.criar');
Route::post('motorista/salvar', 'motoristaController@store')->name('motorista.salvar');
Route::get('motorista/mostrar', 'motoristaController@show')->name('motorista.mostrar');
Route::post('motorista/atualizar/{id}', 'motoristaController@update')->name('motorista.atualizar');
Route::delete('motorista/remover/{id}', 'motoristaController@destroy')->name('motorista.remover');
Route::get('motorista/editar/{id}', 'motoristaController@edit')->name('motorista.editar');

//ROSTAS DE SOLICITAÇÕES
Route::get('solicitacoes/index', 'solicitacoesController@index')->name('solicitacoes.index');
Route::get('solicitacoes/criar', 'solicitacoesController@create')->name('solicitacoes.criar');
Route::post('solicitacoes/salvar', 'solicitacoesController@store')->name('solicitacoes.salvar');
Route::get('solicitacoes/mostrar', 'solicitacoesController@show')->name('solicitacoes.mostrar');
Route::post('solicitacoes/atualizar/{id}', 'solicitacoesController@update')->name('solicitacoes.atualizar');
Route::delete('solicitacoes/remover/{id}', 'solicitacoesController@destroy')->name('solicitacoes.remover');
Route::get('solicitacoes/editar/{id}', 'solicitacoesController@edit')->name('solicitacoes.editar');
Route::get('solicitacoes/visualizar', 'solicitacoesController@visu')->name('solicitacoes.visualizar');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
