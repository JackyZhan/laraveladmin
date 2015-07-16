<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route:: post('/admin/article/upload', 'Admin\ArticleController@upload');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    Route::post('/article/upload', 'ArticleController@upload');
});


Route::group(['prefix' => 'api', 'namespace' => 'Api'], function()
{
    Route::get('/event', 'ApiEventController@index');
    Route::get('/event/show/{id}', 'ApiEventController@show');
});
