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
    return view('inicio');
})->name('inicio');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/seleccion', function(){
	return view('auth.seleccion');
});

Route::group(['prefix' => 'administrador',  'middleware' => ['auth', 'administrador']], function() {

	Route::get('/', function () {
		return view('home');
	});

	Route::resource('encuestas', 'PollController');

});

Route::group(['prefix' => 'tutorado', 'middleware' => ['auth', 'tutorado']], function() {

	Route::get('/', function () {
		return view('home');
	});

	Route::get('/encuestas', [
		'uses' => 'AnswerController@showPolls',
		'as' => 'encuestas'
	]);

	Route::get('/responder-encuesta/{id}', [
		'uses' => 'AnswerController@answerPoll',
		'as' => 'responderEncuesta'
	]);

});

Route::group(['prefix' => 'coordinador', 'middleware' => ['auth', 'coordinador']], function() {

	Route::get('/', function () {
		return view('home');
	});

});

Route::group(['prefix' => 'tutor', 'middleware' => ['auth', 'tutor']], function() {

	Route::get('/', function () {
		return view('home');
	});

});
