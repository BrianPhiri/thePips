<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Products;
use App\Categories;
use App\User;
use App\Orders;

class AdminController extends Controller
{
    public function index(){
      $products = Products::All()->count();
      $categories = categories::All()->count();
      $customers = User::All()->count();
      return view('admin/dashboard')->with('products', $products)->with('categories', $categories)->with('customers', $customers);
    }
    public function summary(){
      $products = Products::All()->count();
      $categories = categories::All()->count();
      $customers = User::All()->count();
      $report[] = array('products' => "$products" ,'categories' => "$categories" ,'customers' => "$customers");
      return Response::json($report);
    }

    public function order(){
      $orders = Orders::All();
      return view('admin.orders', compact('orders', compact('orders')));
    }
}
