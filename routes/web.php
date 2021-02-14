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

Route::group(['prefix'=>'admin'], function(){
   Route::get('reserve/create', 'Admin\ReserveController@add'); 
    
   Route::get('cake/create','Admin\CakeController@add');
   Route::get('cake/edit','Admin\CakeController@edit');
   
});