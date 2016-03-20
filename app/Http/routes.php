<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'FrontController@index');
    Route::get('contact', 'FrontController@showContact');
    Route::post('send', 'FrontController@sendContact');
	Route::any('login', 'LoginController@login'); // get et post
	Route::get('logout', 'LoginController@logout'); // get et post
    Route::get('galerie', 'FrontController@galerie');
    Route::get('livredor', 'FrontController@livredor');
    Route::get('prestations', 'FrontController@prestations');
	
	Route::group(['middleware' => ['auth']], function () {
		Route::get('dashboard', 'FrontController@dashboard');
		Route::resource('picture','PictureController');
		Route::resource('mariage','MariageController');
	});
});

