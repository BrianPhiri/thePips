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
      $latestProducts = Products::latest()->select('image')->take(5)->get();
      return view('admin/dashboard')->with('products', $products)->with('categories', $categories)->with('customers', $customers)->with('latestProducts', $latestProducts);
    }
    public function summary(){
      $products = Products::All()->count();
      $categories = categories::All()->count();
      $customers = User::All()->count();
      $latestProducts = Products::latest()->select('image')->take(5)->get();
      $report[] = array('products' => "$products" ,'categories' => "$categories" ,'customers' => "$customers", 'latestProducts' => "$latestProducts");
      return Response::json($report);
    }

    // orders information
    public function order(){
      $orders = Orders::All();
    return view('admin.orders.orders', compact('orders'));
    }
}
