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

Route::get('/home', 'HomeController@index')->name('home');



// RUTA DE RANKING
Route::get('/ranking', 'RankingController@rank')->name('ranking');
// RUTA DE FAQ
Route::get('/faq', 'FaqController@faq')->name('faq');
// RUTA DE CONTACTO
Route::get('/contacto', 'ContactoController@contac')->name('contacto');