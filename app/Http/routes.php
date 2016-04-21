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
    return view('admin/indexs');
});
Route::get('/dashboard', function(){
    return view('admin/dashboard');
});
Route::get('/category', function(){ return view('admin/graphs'); });
Route::get('/products', function(){});
Route::get('/customers', function(){});
Route::get('/profile', function(){ return view('admin/profile'); });
Route::get('/calendar', function(){ return view('admin/calendar'); });
