<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/auth/register', [
    'uses' => 'AuthController@getRegister',
    'as'   => 'auth.register',
    'middleware' => ['guest']
]);
 
Route::post('/auth/register', [
    'uses' => 'AuthController@postRegister',
    'middleware' => ['guest']
]);
 
Route::get('/auth/login', [
    'uses' => 'AuthController@getLogin',
    'as'   => 'auth.login',
    'middleware' => ['guest']
]);
 
Route::post('/auth/login', [
    'uses' => 'AuthController@postLogIn',
    'middleware' => ['guest']
]);

Route::group(['middleware' => 'web'], function () {
	Route::get('auth/dash', 'AuthenticateController@getDash');
	Route::get('logout', [ 'as' => 'logout', 'uses' =>'AuthController@logout']);

	/*********************the orders routes************************************/
	Route::get('order/index', ['as' => 'order_index', 'uses' => 'OrderController@index']);
	Route::get('order/create', ['as' => 'order_create', 'uses' => 'OrderController@create']);
	Route::get('order/edit/{id}', ['as' => 'order_edit', 'uses' => 'OrderController@edit']);
	Route::post('order/update/{id}', ['as' => 'order_update', 'uses' => 'OrderController@update']);
	Route::post('order/store', ['as' => 'order_store', 'uses' => 'OrderController@store']);
	Route::get('order/destroy/{id}', ['as' => 'order_destroy', 'uses' => 'OrderController@destroy']);
	/*********************the end orders routes************************************/

	/*********************the placeorder routes************************************/
	Route::post('placeorder/store', ['as' => 'placeorder_store', 'uses' => 'PlaceOrderController@store']);
	Route::get('placeorder/create', ['as' => 'placeorder_create', 'uses' => 'PlaceOrderController@create']);
	/*********************the end placeorder routes************************************/


	/***************************the orderline routes************************************/
	Route::get('orderline/index', ['as' => 'orderline_index', 'uses' => 'OrderlineController@index']);
	Route::post('orderline/store', ['as' => 'orderline_store', 'uses' => 'OrderlineController@store']);
	Route::get('orderline/create', ['as' => 'orderline_create', 'uses' => 'OrderlineController@create']);
	Route::get('orderline/edit/{id}', ['as' => 'orderline_edit', 'uses' => 'OrderlineController@edit']);
    Route::post('orderline/update/{id}', ['as' => 'orderline_update', 'uses' => 'OrderlineController@update']);
   	/***************************the orderline routes************************************/
});