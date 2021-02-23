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

Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
   Route::get('reserve/create', 'Admin\ReserveController@add'); 
   Route::post('reserve/create', 'Admin\ReserveController@create');
    
   Route::get('cake/create','Admin\CakeController@add');
   Route::post('cake/create', 'Admin\CakeController@create');
   Route::get('cake/edit','Admin\CakeController@edit');
   Route::post('cake/edit','Admin\CakeController@update');
   Route::get('cake', 'Admin\CakeController@index');
   
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
