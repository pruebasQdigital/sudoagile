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

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/pruebas/(nombre?)', function ($nombre = null){

    $texto = '<h2>Escribir un nombre desde la dirección</h2>';

    $texto .= 'Nombre: '.$nombre;

    return  $texto;

});

