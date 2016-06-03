<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\CartItem;
use Illuminate\Support\Facades\Request;
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
  public function index(){
    if (!Auth::check()){
        $cart = Cart::content();
        return view('homepage.cart', array('db' => null, 'cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
      }
      // This is strictly for logged in persons.
      else{

        $total = 10000;
        $db = ShopCart::with('products')->get();
          return view('homepage.cart', array('db' => $db, 'cart' => null, 'title' => 'Welcome', 'description' => '', 'page' => 'home'))->with('total', $total);
       }
  }

  public function destroy($id){
    ShopCart::destroy($id);
    return Redirect::intended('carts');
  }

  public function store(){
    if (!Auth::check())
    {
      // Stores the items in the shop cart temporarily during a session.
      if (Request::isMethod('post')) {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $product->image]));
      }

      $cart = Cart::content();

      return view('homepage.cart', array('db' => null, 'cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'))->with('total', $total);
    }
    // This is strictly for logged in persons.
    else
    {

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

          $db = ShopCart::with('products')->get();
          return view('homepage.cart', array('db' => $db, 'cart' => null, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
  }


  public function quantity($id, $qty ,$type){

    if($type == "increment"){
      $qty++;
    }elseif($type == "decrement"){
      if($qty < 2){
        $qty = 1;
      }else{
        $qty--;
      }
      $qty--;

    }else{

    }
    ShopCart::where('id', '=', $id)->update(['quantity' => $qty]);
    return Redirect::intended('carts');
  }

  public function toDb(){
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
    return Redirect::intended('carts');
  }

  public function test(){
    $cart = ShopCart::with('products')->get();
    return $products = $cart->first()->products;
    foreach ($cart as $products) {
        $qty = $products->quantity;

        foreach ($products->products as $val) {
          $price = $val->price;
        }
      }
    return  $sub_total = $price * $qty;

  }
}
