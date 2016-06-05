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
Auth::loginUsingId(1);

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
Route::post('carts','CartController@index');
Route::resource('carts','CartController');
Route::post('carts/destroy/{id}', 'CartController@destroy');
Route::get('carts/destroy/{id}', 'CartController@destroy');
Route::post('carts/quantity/{id}/{type}', 'CartController@quantity');
Route::get('carts/quantity/{id}/{qty}/{type}', 'CartController@quantity');
Route::post('/checkout', 'OrdersController@checkout');
Route::get('test', 'OrdersController@buy');
// Route::get('carts/remove','CartController@remove');
//Route::resouce('persist','CartController@cart');

Route::get('addItem/{id}','CartController@addItem');

Route::get('/', 'HomeController@index');

// Route Resource
Route::get('products/{productId}','HomeController@show');
Route::get('products/category/{productId}','HomeController@categoryProducts');

// Testing Cart View
Route::get('redirect','RedirectsController@redirectUser');
// admin
Route::get('/admin', 'AdminController@index');
Route::get('/summary', 'AdminController@summary');
Route::get('/subcategories', 'ProductsController@subcategory');

Route::resource('category', 'CategoriesController');
Route::resource('product', 'ProductsController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('customers', 'CustomerController');
Route::get('order', 'AdminController@order');

Route::get('/error', function(){ return view('admin/brian'); });

Route::get('/cart',function(){
  return view('homepage/cart');
});

Route::get('/products',function(){
  return view('homepage/products');
});

// Route::get('/single',function(){
//   return view('homepage/single');
// });

Route::get('/contact',function(){
  return view('homepage/contact');
});

Route::post('executeSearch','SearchController@executeSearch');
