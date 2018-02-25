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

Route::get('/', 'HomeController@allPosts');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::group(['prefix'=>'posts'], function () {
        Route::get('/', 'PostController@index')->name('allPosts');
        Route::get('post-{slug}', 'PostController@show')->name('showPost');
        Route::get('add', 'PostController@create')->name('addPost');
        Route::post('add', 'PostController@store')->name('savePost');
        Route::get('edit/{id}', 'PostController@edit')->name('editPost');
        Route::post('edit/{id}', 'PostController@update')->name('updatePost');
        Route::match(['get', 'post'],'delete/{id}', 'PostController@destroy')->name('deletePost');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
