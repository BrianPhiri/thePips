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
Route::get('account', function () {
    return view('homepage/account');
});
Route::get('productsList', function () {
    return view('homepage/products');
});
Route::get('cart', function () {
    return view('homepage/cart');
});
// admin
Route::get('/dashboard', function(){
    return view('admin/dashboard');
});
Route::get('/category', 'CategoriesController@index');
Route::get('/category/create', 'CategoriesController@create');
Route::post('/category', 'CategoriesController@store');
Route::get('/products', 'ProductsController@index');
Route::get('products/create', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');

Route::get('/customers', function(){});
// Route::get('/profile', function(){ return view('admin/profile'); });
// Route::get('/calendar', function(){ return view('admin/calendar'); });
// Route::get('/inbox', function(){ return view('admin/inbox'); });

// Route::get('/test', function(){ return view('admin/categoryAdd'); });
Route::get('/home',function(){
  return view('homepage/index');
});
Route::get('/account',function(){
  return view('homepage/account');
});Route::get('/cart',function(){
  return view('homepage/cart');
});Route::get('/login',function(){
  return view('homepage/login');
});Route::get('/products',function(){
  return view('homepage/products');
});Route::get('/single',function(){
  return view('homepage/single');
});Route::get('/contact',function(){
  return view('homepage/contact');
});
