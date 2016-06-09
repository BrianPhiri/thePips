<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\CartItem;
// use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use App\ShopCart;
use App\Products;
use App\User;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Illuminate\Support\Collection;
use App\Http\Requests;
use Cart;

class CartController extends Controller
{
  public function cart() {
    //update/ add new item to cart
    if (Request::isMethod('post')) {
      if(Request::get('product_id') && (Request::get('remove'))) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        return $rowId; exit;
        Cart::remove($rowId[0]);
        App\Flight::destroy(23);
      }else{
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        // Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
      }
    }
    if(Auth::check()){
      $cartItems = Cart::content();
      foreach($cartItems as $cartItem){
        $cartPost = new ShopCart();
        $cartPost->user_id=Auth::user()->id;
        $cartPost->product_id=$cartItem->id;
        $cartPost->quantity=$cartItem->qty;
        $cartPost->save();
      }
    }
    //increment the quantity
    if (Request::get('product_id') && (Request::get('increment')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty + 1);
    }

    //decrease the quantity
    if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty - 1);
    }

    if(!Auth::check()){
      $cart = Cart::content();
      return view('homepage.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }else if(Auth::check()){
      // $cart = ShopCart::all();
      $cart = ShopCart::with('products')->get();
      return view('homepage.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    // return view('homepage.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));

  }

}
