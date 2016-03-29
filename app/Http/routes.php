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
    Route::get('galerie-categories', 'FrontController@showGalerie');
    Route::get('livredor', 'FrontController@livredor');
    Route::get('agence', 'FrontController@agence');
    Route::get('prestations', 'FrontController@prestations');
    Route::get('mentions-legales', 'FrontController@mentionsLegales');
    Route::get('formules-mariages', 'FrontController@formulesMariages');
    Route::get('formules-evenements-prives', 'FrontController@formulesEvenementsPrives');
    Route::get('conciergerie', 'FrontController@conciergerie');
    Route::any('category/{id}', 'FrontController@showPicturesByCategory');
    
	
	Route::group(['middleware' => ['auth']], function () {
		
		Route::resource('mariage','MariageController');
		Route::get('dashboard-maries/{id}', 'ContentMariesController@dashboardMaries');
		Route::get('dashboard-maries/create/{id}', 'ContentMariesController@create');
		Route::any('createContent/{id}', 'ContentMariesController@update');

		Route::get('article-maries/create/{id}', 'ArticleController@create');
		Route::any('createArticle/{id}', 'ArticleController@store');
		Route::any('article-maries/delete/{id}', 'ArticleController@destroy');
		Route::get('edit-article/{id}', 'ArticleController@edit');
		Route::any('article-maries/update/{id}', 'ArticleController@update');

		Route::group(['middleware' => ['admin']], function () {
			Route::get('dashboard', 'FrontController@dashboard');
			Route::resource('picture','PictureController');
			Route::get('mariageDelete/{id}', 'MariageController@destroy');
		});

	});

});

