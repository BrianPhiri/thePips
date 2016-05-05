<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customers;

class CustomerController extends Controller
{
   public function index (){
   	$customers = Customers::All();
   	return view('admin.customers.customer', compact('customers'));
   }
}