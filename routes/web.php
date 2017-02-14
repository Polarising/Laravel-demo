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

//define the url
Route::group(['prefix' => 'api'], function(){
	//all url inside should like "http://localhost/api"
	Route::group(['prefix' => 'customer'], function(){
		//all url inside should like "http://localhost/api/customer"

		//Example: "http://localhost/api/customer/3",method:GET
		Route::get('{id}','CustomerController@show');//call function show() in class 'CustomerController'

		Route::post('/','CustomerController@store');
		Route::put('{id}','CustomerController@update');
		Route::delete('{id}','CustomerController@delete');
	});
});


// Route::get('/api/customer', 'CustomerController@show');
