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

Auth::routes();


//////////////////// NAV
// RUTA DE RANKING
Route::get('/ranking', 'PagNavController@rank')->name('ranking');
// RUTA DE FAQ
Route::get('/faq', 'PagNavController@faq')->name('faq');
// RUTA DE CONTACTO
Route::get('/contacto', 'PagNavController@contac')->name('contacto');
Route::post('/contacto', 'PagNavController@guardarComent')->name('contacto');


// ////////////////////// JUEGO
// // RUTA DE HOMEJUEGO
Route::get('/home', 'HomeController@index')->name('home');
// // RUTA DE JUEGO
Route::get('/juego', 'JuegoController@juego')->name('juego');
// // RUTA DE EDITAR PERFIL
Route::get('/editarPerf', 'JuegoController@editperf')->name('editarPerf');
// // RUTA DE PREGUNTAS
Route::get('/json', 'JuegoController@llamaPregunta')->name('json');


////////////////////// ADMINISTRADOR
// RUTA DE PREGUNTAS
Route::get('/preguntas', 'AdminController@show')->name('preguntas');
Route::get('/preguntas/{id}', 'AdminController@delete')->name('preguntas');
// RUTA DE AGG ADMIN
Route::get('/aggAdmin', 'AdminController@aggAdmin')->name('aggAdmin');
Route::post('/aggAdmin', 'AdminController@addAdminis')->name('aggAdmin');
// RUTA DE AGG PREGUNTA
Route::get('/aggPreg', 'AdminController@aggPreg')->name('aggPreg');
// RUTA DE COMENTARIOS
Route::get('/comentarios', 'AdminController@coment')->name('comentarios');
Route::get('/comentarios/{id}', 'AdminController@deletComent')->name('comentarios');
// RUTA DE HOME ADMIN
Route::get('/homeAdmin', 'AdminController@homeAdmin')->name('homeAdmin')->middleware('admin');