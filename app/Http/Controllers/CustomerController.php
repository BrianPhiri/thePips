<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Orders;
use App\OrderItems;

class CustomerController extends Controller
{
   public function index (){
    $customers = User::All();
   	return view('admin.customers.customer', compact('customers'));
   }

   public function show ($id){
    $user = User::findOrFail($id)->first();
    // count orders
    $orderCount = Orders::where('user_id','=', $id)->count();
    // get order items
<<<<<<< HEAD
    $items = OrderItems::with('orders')->whereHas('orders', function($query) use ($id){
        $query->where('user_id',$id);
=======
    $items = OrderItems::with('orders')->whereHas('orders', function($query){
        $query->where('user_id', '=', 6);

>>>>>>> 083071908ea4344cf284eb1c05a1d173cd12cfcd
    })->get();
    // count order items
    $itemsCount = $items->count();
    $orderItems = Orders::where('user_id', '=', $id)->get();
    $user->delete();
   	return view('admin.customers.profile', compact('user', 'orderCount','itemsCount', 'orderItems'));
<<<<<<< HEAD

=======
>>>>>>> 083071908ea4344cf284eb1c05a1d173cd12cfcd
   }

   public function update(){}
   public function destroy($id){
     $user = User::find($id);
     $user->delete();
     return Redirect::to('/user');
   }
}
