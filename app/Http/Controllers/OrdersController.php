<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\OrderItems;
use App\ShopCart;
class OrdersController extends Controller
{
    public function checkout(Request $request)
    {
      $tokken = $request->input('stripeToken');
      $cart = Cart::where('user_id', '=', Auth::user()->id)->first();
      
      return $cart;
    }
    
    public function 
}
