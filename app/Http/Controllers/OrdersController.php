<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Orders;
use App\OrderItems;
use App\Mailers\AppMailer;
use App\ShopCart;
use Cart;

class OrdersController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['only'=>'checkout']);

  }

  public function checkout(Request $request){
    $token = $request->input('stripeToken');
    //  $cart = ShopCart::where('user_id', '=', Auth::user()->id)->first();
    $items = ShopCart::with('products')->where('user_id', '=', Auth::user()->id)->get();
    //  $items = $cart->cartItems;
    $total = 0;
    $db_content = ShopCart::where('user_id',Auth::user()->id)->with('products')->get();
    $total=0;
    foreach($db_content as $item){
      $total += $item->products->price*$item->quantity;
    }

    if(Auth::user()->charge($total, [
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
      $orderItem->orders_id = $order->id;
      $orderItem->products_id = $item->products_id;
      $orderItem->quantity = $item->quantity;
      $orderItem->price = $item->products->price;
      $orderItem->save();

      ShopCart::destroy($item->id);
    }

        // Sends Orders Confirmation Mail to the Customer.
    $user = Auth::user();
    // $mailer->sendOrdersConfirmationTo($user);

    $request->session()->flash('message','Thank You '.Auth::user()->title.' '.Auth::user()->name.' for Shopping with us.');

    return redirect()->intended('/shopCart');
  }else
  {
    $request->session()->flash('message','Sorry '.Auth::user()->title.' '.Auth::user()->name.'the order has not been processed.');
    return redirect('/shopCart');
  }
}

}
