<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Orders;

class CustomerController extends Controller
{
   public function index (){
    $customers = User::All();
   	return view('admin.customers.customer', compact('customers'));
   }
   public function show ($id){
    $user = User::findOrFail($id);
    // $orders = Orders::where('customer_id', '=', $id)->get();
   	return view('admin.customers.user', compact('user', 'orders'));
   }

   public function update(){}
   public function destroy(){}
}
