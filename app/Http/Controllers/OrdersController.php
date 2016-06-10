<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Orders;
use App\OrderItems;
use App\ShopCart;
use Cart;
class OrdersController extends Controller
{
  public function checkout(Request $request){
     $token = $request->input('stripeToken');
    //  $cart = ShopCart::where('user_id', '=', Auth::user()->id)->first();
     $items = ShopCart::with('products')->where('user_id', '=', Auth::user()->id)->get();
    //  $items = $cart->cartItems;
     $total = Cart::total();
    //  foreach($items as $item){
    //    foreach($item->products as $prd){
    //      $total += $prd['price'];
    //    }
    //   //  $total += $item->product->price;
    //  }

     if(Auth::user()->charge($total-100, [
       'source' => $token,
       'receipt_email' => Auth::user()->email,
     ])){
       $order = new Orders();
       $order->total = $total;
       $order->user_id = Auth::user()->id;
       $order->save();

       // saving in orderItems
       foreach($items as $item){
         $orderItem = new OrderItems();
         $orderItem->order_id = $order->id;
         $orderItem->product_id = $item->product_id;
         $orderItem->save();

         ShopCart::destroy($item->id);
        }
      //  return view('brian');
     }else{
       return redirect('/carts');
     }
   }

}
