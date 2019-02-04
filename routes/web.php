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




Route::get('/', 'PageController@getIndex')->name('index');

Route::get('/home', 'PageController@getHome')->name('home');
Route::resource('posts', 'PostController');
// Route::group(['middleware' => ['auth']], function () {
//
//   Route::get('/home', 'PostController@index')->name('home');
//
// });

Auth::routes();
