<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Orders;
use App\OrderItems;

class CustomerController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }

  public function index (){
    $customers = User::All();
    return view('admin.customers.customer', compact('customers'));
  }

  public function show ($id){
    $user = User::findOrFail($id);
    // count orders
    $orderCount = Orders::where('user_id','=', $id)->count();
    // get order items

    $items = OrderItems::with('orders')->whereHas('orders', function($query) use ($id){
      $query->where('user_id',$id);
    })->get();
    // count order items
    $itemsCount = $items->count();
    $orderItems = Orders::where('user_id', '=', $id)->get();
    return view('admin.customers.profile', compact('user', 'orderCount','itemsCount', 'orderItems'));

  }
  public function displayOrders($id){
    $orders = Orders::where('user_id', '=', $id)->get();
    return view('admin.customers.customerOders', compact('orders'));
  }
  
  public function displayOrderItems($id){
    $items = OrderItems::with('orders')->whereHas('orders', function($query) use ($id){
      $query->where('user_id',$id);
    })->get();
    // return $items;
    return view('admin.customers.customerOderItems', compact('items'));
  }

  public function update(){}
 //  public function destroy($id){
 //   $user = User::find($id);
 //   $user->delete();
 //   return Redirect::to('/user');
 // }
}
