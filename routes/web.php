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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/homeJuego', 'HomeJuegoController@homeJuego')->name('homeJuego');


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
// Route::get('/home', 'HomeController@home')->name('home');
// // RUTA DE JUEGO
// Route::get('/juego', 'JuegoController@juego')->name('juego');
// // RUTA DE EDITAR PERFIL
Route::get('/editarPerf', 'JuegoController@editperf')->name('editarPerf');


// ////////////////////// ADMINISTRADOR
// // RUTA DE PREGUNTAS
// Route::post('/preguntas', 'PreguntasController@preguntas')->name('preguntas');
// // RUTA DE COMENTARIOS
// Route::post('/comentarios/{comentarios}', 'ComentariosController@coment')->name('comentarios');
// // RUTA DE AGG ADMIN
// Route::post('/aggAdmin', 'AggAdminController@aggAdmin')->name('aggAdmin');
// // RUTA DE AGG PREGUNTA
// Route::post('/aggPreg', 'AggPregController@aggPreg')->name('aggPreg');
// // RUTA DE HOME ADMIN
// Route::get('/homeAdmin', 'HomeAdminController@homeAdmin')->name('homeAdmin');