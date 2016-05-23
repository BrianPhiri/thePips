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

Route::get('/', 'HomeController@index');
Route::resource('/products', 'HomeController');
// admin
Route::get('/admin', 'AdminController@index');
Route::get('/summary', 'AdminController@summary');
Route::get('/subcategories', 'ProductsController@subcategory');

Route::resource('category', 'CategoriesController');
Route::resource('product', 'ProductsController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('customers', 'CustomerController');
Route::get('order', 'AdminController@order');
Route::get('/test', 'ProductsController@test');

Route::get('/error', function(){ return view('admin/brian'); });

Route::get('/cart',function(){
  return view('homepage/cart');
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


Route::get('/home', 'HomeController@index');

Route::get('temp', 'MailsController@test');

// Authentication and Verification Routes.
Route::auth();
Route::get('register/confirm/{token}', 'Auth\AuthController@confirmEmail');