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
use Input;

class CartController extends Controller
{
  public function cart()
  {
    // remove items from the Cart
    if(Request::get('yes'))
    {
      Cart::destroy();
      Redirect::back();
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

  //increment or decrement the quantity
  public function quantity($id){
    if(Request::ajax()){
      $qty = Input::get('quantity');
      // Update the database
       ShopCart::where('product_id', '=', $id)->update(['quantity' => $qty]);
    }
  }

  public function subTotal(){
    $cart = ShopCart::with('products')->get();
    $products = $cart->first()->products;
    foreach ($cart as $products) {
        $qty = $products->quantity;

      foreach ($products->products as $val) {
        $price = $val->price;
      }
    }
    $sub_total = $price * $qty;
    return Response::json($sub_total);
  }

}
