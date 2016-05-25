<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\CartItem;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use App\ShopCart;
use App\Products;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Illuminate\Support\Collection;
use App\Http\Requests;
use Cart;

class CartController extends Controller
{
  // public function __construct()
  // {
  // 	// $this->middleware('auth');
  // }

  // public function addItem(Request $request, $productId)
  // {
  //     if (Auth::check())
  //     {
  //         $cart = Cart::where('user_id',Auth::user()->id)->first();
  //         // If a user does not have a cart, a new instance of the Cart Model is created.
  //         if(!$cart){
  //             $cart =  new Cart();
  //             $cart->user_id=Auth::user()->id;
  //             $cart->save();
  //         }
  //         // Items are inserted into the cart.
  //         $cartItem  = new Cartitem();
  //         $cartItem->product_id=$productId;
  //         $cartItem->cart_id= $cart->id;
  //         $cartItem->save();

  //         return redirect('/cart');
  //     }
  //     else
  //     {
  //         // Stores the items in the shop cart temporarily during a session.
  //         $items =['product_id' => $productId,'quantity' => 1];
  //         $request->session()->push('cart',$items);
  //         $test = $request->session()->pull('cart','default');
  //         return view('homepage.test',compact('test'));
  //     }
  // }

  // public function showCart()
  // {
  // 	// $cart = Cart::where('user_id',Auth::user()->id->first();
  // 	if(!$cart)
  // 	{
  // 		$cart = new Cart();
  // 		$cart->user_id = Auth::user()->id;
  // 		$cart->save();
  // 	}
  // 	$items = $cart->cartItems;
  // 	$total = 0;
  // 	foreach ($items as $item) {
  // 		$total += $item->product->price;
  // 	}

  // 	return view('homepage.cart', compact('items','total'));
  // }

  // public function removeItem($id)
  // {
  // 	Cart::destroy($id);
  // 	return Redirect::back();
  // }

  public function cart()
  {
    // remove items from the Cart
    if(Request::get('yes'))
    {
      Cart::destroy();
      Redirect::back();    
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
      return view('homepage.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    else
    {
      $cartItems = Cart::content();
      $cart = ShopCart::where('user_id',Auth::user()->id)->first();
      // If a user does not have a cart, a new instance of the Cart Model is created.
      if(!$cart){
        $cart =  new ShopCart();
        $cart->user_id=Auth::user()->id;
        $cart->save();
      }
      foreach ($cartItems as $kat)
      {
        // Items are inserted into the cart's database.
        $cartItem  = new CartItem();
        $cartItem->product_id=$kat->id;
        $cartItem->quantity=$kat->qty;
        $cartItem->sale_price=$kat->price;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
      }
      return view('homepage.cart', array('cart' => $cartItems, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
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
