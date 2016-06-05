<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\OrderItems;
use App\ShopCart;
class OrdersController extends Controller
{
  public function checkout(Request $request){
    $token = $request->input('stripeToken');
    $cart = Cart::where('user_id', '=', Auth::user()->id)->first();
    $items = $cart->cartItems;
    $total =0;
    foreach($items as $item){
      $total += $item->product->price;
    }
    if(Auth::user()->charge($total*100, [
      'source' -> $token,
      'recept_email' -> Auth::user()->email,
    ])){
      $order = new Order();
      $order->total = $total;
      $order->user_id = Auth::user()->id;
      $order->save();
      
      // saving in orderItems
      foreach($items as $item){
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $item->product_id;
        $orderItem->save();
        
        CartItem::destroy($item->id);
      }
      return view(brian);
    }else{
      return redirect('/carts');
    }
  }
}
