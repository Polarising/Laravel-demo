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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'api'], function(){
	Route::group(['prefix' => 'customer'], function(){
		Route::get('{id}','CustomerController@show');
		Route::post('/','CustomerController@store');
		Route::put('{id}','CustomerController@update');
		Route::delete('{id}','CustomerController@delete');
	});
});


// Route::get('/api/customer', 'CustomerController@show');
