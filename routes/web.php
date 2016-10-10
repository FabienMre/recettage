<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');

    Route::resource('/post', 'PostController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/user', 'UserController');
    Route::resource('/project', 'ProjectController');
    Route::resource('/password', 'PasswordController');


    Route::get('contact',
        ['as' => 'contact', 'uses' => 'ContactController@create']);
    Route::post('contact',
        ['as' => 'contact_store', 'uses' => 'ContactController@store']);

    Route::get('/admin', function(){
        return view('errors.503');
    })->middleware('isadmin');

});
