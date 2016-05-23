<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function addItem($productId)
    {

    	$cart = Cart::where('user_id',Auth::user()->id)->first();
    	if(!$cart)
    	{
    		$cart = new Cart();
    		$cart->user_id = Auth::user()->id;
    		$cart->save();
    	}

    	$cartItem = new CartItem();
    	$cartItem->product_id = $product_id;
    	$cartItem->cart_id = $cart->id;
    	$cartItem->save();

    	return Redirect::intended('cart');
    }

    public function showCart()
    {
    	$cart = Cart::where('user_id',Auth::user()->id->first();
    	if(!$cart)
    	{
    		$cart = new Cart();
    		$cart->user_id = Auth::user()->id;
    		$cart->save();
    	}
    	$items = $cart->cartItems;
    	$total = 0;
    	foreach ($items as $item) {
    		$total += $item->product->price;
    	}

    	return view('homepage.cart', compact('items','total'));   	
    }

    public function removeItem($id)
    {
    	Cart::destroy($id);
    	return Redirect::back();
    }

}
