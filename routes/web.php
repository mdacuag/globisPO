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


Route::group(['middleware' => 'auth'], function () {
	Route::resource('product', 'ProductController');
	Route::resource('po', 'PoController');

	Route::get('/PDF', 'ProductController@download');
	Route::get('/select', 'ProductController@select');
	Route::get('/PO', 'ProductController@createPO');
	Route::get('/deleteP', 'ProductController@delete');
	Route::get('/editPO/{id}', 'ProductController@editPO');
	Route::get('/updatePO/{id}', 'ProductController@updatePO');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
