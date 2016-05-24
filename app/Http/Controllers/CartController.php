<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\Http\Requests;

class CartController extends Controller
{
    public function __construct()
    {
    	// $this->middleware('auth');
    }

    public function addItem(Request $request, $productId)
    {
        // $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        // if(!$cart){
        //     $cart =  new Cart();
        //     $cart->user_id=Auth::user()->id;
        //     $cart->save();
        // }
 
        // $cartItem  = new Cartitem();
        // $cartItem->product_id=$productId;
        // // $cartItem->cart_id= $cart->id;
        // // $cartItem->save();
 
        // // return redirect('/cart');
        // return $cartItem->count();
        session(['brian'=>'regular','cartItem'=>'Dhania']);
        return $request->session()->all();

    }

    public function showCart()
    {
    	// $cart = Cart::where('user_id',Auth::user()->id->first();
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
