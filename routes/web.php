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



Route::group(['middleware' => ['auth']], function () {

    Route::resource('pages', 'PageController', ['except' => ['index']]);
    Route::resource('posts', 'PostController', ['except' => ['index']]);

});

Route::group(['middleware' => ['guest']], function () {

	// Root
	Route::get('/', 'DataController@getIndex')->name('index');
	Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

});

Route::post('emails', 'EmailController@sendEmail')->name('email.store');


// Auto
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
