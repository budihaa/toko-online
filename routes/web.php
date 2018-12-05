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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'categories'], function () {
	Route::get('/', 'CategoryController@index');
	Route::get('/search', 'CategoryController@search');
	Route::get('/delete', 'CategoryController@delete');
	Route::get('/restore', 'CategoryController@restore');
	Route::get('/destroy', 'CategoryController@destroy');
});
