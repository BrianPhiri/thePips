<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class CustomerController extends Controller
{
   public function index (){
    $customers = User::All();
   	return view('admin.customers.customer', compact('customers'));
   }
   public function show ($id){
    $users = User::findOrFail($id);
   	return view('admin.customers.user', compact('users'));
   }

   public function update(){}
   public function destroy(){}
}
