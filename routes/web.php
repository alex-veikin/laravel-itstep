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
    Route::get('{slug}', 'PostController@show')->name('showPost');
    Route::get('add', 'PostController@create')->name('addPost');
    Route::post('add', 'PostController@store')->name('savePost');
    Route::get('edit/{id}', 'PostController@edit')->name('editPost');
    Route::get('delete/{id}', 'PostController@destroy')->name('deletePost');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
