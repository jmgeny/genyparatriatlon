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
	return view('index');
    // return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/calendar','CalendarController@index')->name('calendar.index');


// calendario
Route::get('/calendar','CalendarController@index')->name('calendar.index');
Route::get('/calendar/{mes}','CalendarController@index_month')->name('calendar.index');

// Evento
Route::get('Evento/form','EventController@form');
Route::post('Evento/create','EventController@create');
Route::get('Evento/details/{id}','EventController@details');
Route::get('Evento/index','EventController@index');
Route::get('Evento/index/{month}','EventController@index_month');
Route::post('Evento/calendario','EventController@calendario');