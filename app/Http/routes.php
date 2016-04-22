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
    return view('admin/index');
});
Route::get('/dashboard', function(){
    return view('admin/dashboard');
});
Route::get('/category', function(){ return view('CategoriesController@index'); });
Route::get('/products', function(){ return view('ProductsController@index'); });
Route::get('/customers', function(){});
Route::get('/profile', function(){ return view('admin/profile'); });
Route::get('/calendar', function(){ return view('admin/calendar'); });
Route::get('/inbox', function(){ return view('admin/inbox'); });

Route::get('/test', 'CategoriesController@index');
