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

Route::resource("formulario", "LibroController");
Route::get("/inicio", "LibroController@index")->name("inicio");

Route::get('/form', function(){
    return view('buscar');
});
Route::post("/form", "FormularioController@busqueda_por_titulo")->name("form");
