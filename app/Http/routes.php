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

// Admin Authentication
$this->get('admin/login', 'SessionsController@showLoginForm');
$this->post('admin/login', 'SessionsController@postLogin');
Route::get('admin/logout','SessionsController@logout');
// Authentication Routes...
$this->get('login', 'Auth\AuthController@showLoginForm');
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm');
$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');

// Email Confirmation
Route::get('register/confirm/{token}', 'Auth\AuthController@confirmEmail');

// Shop Cart Routes
Route::resource('/carts', 'CartController@cart');
Route::get('/carts', 'CartController@cart');

//Route::get('pdfs', 'OrdersController@buy');

Route::get('/checkout', 'OrdersController@checkout');
Route::post('/checkout', 'OrdersController@checkout');

// Cart routes
Route::get('shopCart','CartController@showCart');
Route::post('addItems','CartController@addItem');
Route::get('destroyCart','CartController@destroyCart');
Route::get('destroyDbCart','CartController@destroyDbCart');
Route::post('increment','CartController@increment');
Route::post('decrement','CartController@increment');
Route::get('carts','CartController@cart');
Route::get('shopcarts','CartController@cartDb');

// Testing the Cart
Route::get('cartTest','CartController@cartTest');

// cartComputation
Route::post('compute','CartController@addToSession');
Route::get('/', 'HomeController@index');

// Route Resource
Route::get('products/{productId}','HomeController@show');
Route::get('products/category/{productId}','HomeController@categoryProducts');

// admin
Route::get('/admin', 'AdminController@index');
Route::get('/summary', 'AdminController@summary');
Route::get('/subcategories', 'ProductsController@subcategory');
Route::resource('category', 'CategoriesController');
Route::resource('product', 'ProductsController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('customers', 'CustomerController');
Route::get('/orders', 'AdminController@order');
Route::get('/user/{id}', 'CustomerController@show');

Route::get('/error', function(){ return view('admin/brian'); });

Route::get('/contact',function(){
  return view('homepage/contact');
});

Route::post('executeSearch','SearchController@executeSearch');

//PDFs Route
Route::get('catalogue','PdfsController@downloadPDF');

Route::get('pdfs','PdfsController@getProducts');

Route::get('test', 'TestsController@index');

// About Us
$this->get('about', function(){ return view('homepage.about'); });