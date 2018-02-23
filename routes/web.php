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

Route::get('/', 'PageController@index');

Route::group(['prefix' => 'pages'], function () {
    Route::get('/', 'PageController@pagesAll')->name('allPages');
    Route::match(['get', 'post'], 'add', 'PageController@addPage')->name('addPage');
});

Route::get('{slug}', 'PageController@page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
