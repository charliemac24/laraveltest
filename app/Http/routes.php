<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/customer','CustomerController@index');
Route::get('/customer/create','CustomerController@create');
Route::post('/customer/create','CustomerController@create');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::put('/customer/edit/{id}','CustomerController@edit');
Route::get('/customer/delete/{id}','CustomerController@delete');

Route::get('/order/add_order/{id}','OrderController@add_order');
Route::get('/order/delete/{id}/{customer_id}','OrderController@delete');
Route::get('/order/add_order/{id}','OrderController@add_order');