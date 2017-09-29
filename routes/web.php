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

Route::get('/', [
    'as' => '/',
    'uses' => 'PersonaController@index'
]);

Route::get('personas/lista', [
    'as' => 'personas/lista',
    'uses' => 'PersonaController@show'
]);

Route::post('store/persona', [
    'as' => 'store/persona',
    'uses' => 'PersonaController@store'
]);

Route::get('personas/editar/{id}', [
    'as' => 'personas/editar',
    'uses' => 'PersonaController@edit'
]);

Route::put('personas/update/{persona}', [
    'as' => 'personas/update',
    'uses' => 'PersonaController@update'
]);

Route::get('personas/eliminar/{persona}', [
    'as' => 'personas/eliminar',
    'uses' => 'PersonaController@destroy'
]);

Route::get('personas/calcular/{fecha}', [
    'as' => 'personas/calcular/{fecha}',
    'uses' => 'PersonaController@calcularEdad'
]);