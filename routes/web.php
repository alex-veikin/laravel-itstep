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

Route::get('/', 'PostController@index');

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', 'PostController@index')->name('allPosts');
    Route::get('add', 'PostController@create')->name('addPost');
    Route::post('add', 'PostController@store')->name('savePost');
    Route::get('{slug}', 'PostController@show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
