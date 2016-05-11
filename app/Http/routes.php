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
// customers
Route::get('/', function () {
    return view('homepage/index');
});
// admin
Route::get('/admin', 'AdminController@index');
Route::get('/summary', 'AdminController@summary');
Route::get('/subcategories', 'ProductsController@subcategory');

Route::resource('category', 'CategoriesController');
Route::resource('product', 'ProductsController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('/customers', 'CustomerController');

Route::get('/test', function(){ return view('admin.validation');});

Route::get('/error', function(){ return view('admin/brian'); });

Route::get('/home',function(){
  return view('homepage/index');
});
Route::get('/account',function(){
  return view('homepage/account');
});

Route::get('/cart',function(){
  return view('homepage/cart');
});

Route::get('/login',function(){
  return view('homepage/login');
});

Route::get('/products',function(){
  return view('homepage/products');
});

Route::get('/single',function(){
  return view('homepage/single');
});

Route::get('/contact',function(){
  return view('homepage/contact');
});

Route::get('/proto',function(){
  return view('homepage/prototype');
});
