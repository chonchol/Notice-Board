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

	Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

	Route::auth();

	Route::get('/home', 'HomeController@index');
	Route::group(['prefix' => 'notice','middleware' => 'auth'], function () {
	    Route::get('all', ['as' => 'allNotice' , 'uses' => 'NoticeController@index']);
	    Route::get('add', ['as' => 'addNotice', 'uses' => 'NoticeController@create']);
	    Route::get('edit/{id}', ['as' => 'editNotice', 'uses' => 'NoticeController@edit']);
	    Route::post('save', ['as' => 'saveNotice', 'uses' => 'NoticeController@store']);
	    Route::post('update', ['as' => 'updateNotice', 'uses' => 'NoticeController@update']);
	    Route::get('delete/{id}', ['as' => 'deleteNotice', 'uses' => 'NoticeController@destroy']);
	});

	