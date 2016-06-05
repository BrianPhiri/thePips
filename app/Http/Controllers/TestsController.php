<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CartItem;
use App\Cart;
use App\Products;

class TestsController extends Controller
{
  public function cart()
  {
    // remove items from the Cart
    if(Request::get('yes'))
    {
      Cart::destroy();
      Redirect::back();
    }
    // Not fully retrievable.
    //increment the quantity
    if (Request::get('product_id') && (Request::get('increment')) == 1) {
      $rowId = Cart::search(array('id' => Request::get('product_id')));
      $item = Cart::get($rowId[0]);
      Cart::update($rowId[0], $item->qty + 1);
      // For the database
      $dbRowId = ShopCart::where('product_id', Request::get('product_id'))->first()->quantity;
      // Increment the quantity by 1.
      $newQuantity = $dbRowId + 1;
      // Update the database
      ShopCart::where('product_id', Request::get('product_id'))->update(['quantity' => $newQuantity]);
      // return Redirect::back();
    }

    //decrease the quantity
    elseif (Request::get('product_id') && (Request::get('decrease')) == 1) {
      $rowId = Cart::search(array('id' => Request::get('product_id')));
      $item = Cart::get($rowId[0]);
      Cart::update($rowId[0], $item->qty - 1);
      // For the database
      $dbRowId = ShopCart::where('product_id', Request::get('product_id'))->first()->quantity;
      // Decrement the quantity by 1.
      $newQuantity = $dbRowId - 1;
      // Update the database
      ShopCart::where('product_id', Request::get('product_id'))->update(['quantity' => $newQuantity]);
      // return Redirect::back();
    }
    else
    {
      // remove an item from the cart
      if(Request::get('product_id') && (Request::get('remove')))
      {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        Cart::remove($rowId[0]);
      }

    }

    if (!Auth::check())
    {
      // Stores the items in the shop cart temporarily during a session.
      if (Request::isMethod('post')) {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $product->image]));
      }

      $cart = Cart::content();
      // return $cart;
      return view('homepage.cart', array('db' => null, 'cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    // This is strictly for logged in persons.
    else
    {
      // Stores the items in the shop cart temporarily during a session. [Even if I am logged in]
      if (Request::isMethod('post'))
      {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $product->image]));

        // Avoid multi-product creation
        $cartItems = Cart::content();
        // Should insert items into the cart table based on the user.
        foreach ($cartItems as $kat)
        {
          // Items are inserted into the cart's database.
          $cartItem =  new ShopCart();
          $cartItem->user_id=Auth::user()->id;
          $cartItem->product_id=$kat->id;
          $cartItem->quantity=$kat->qty;
          $cartItem->save();
        }
    }
        $db = ShopCart::with('products')->get();
        return view('homepage.cart', array('db' => $db, 'cart' => null, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
     // return Products::findOrFail('shopCart')->get();
    // $product = Products::find($dbItem->product_id);
  }
}
  /**
  * Empty the cart.
  */
  public function remove()
  {
    Cart::destroy();
    return Redirect::back();
  }
}
