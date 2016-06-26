<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Products;
use App\Categories;
use App\Subcategories;
use App\User;
use App\Orders;
use App\OrderItems;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('admin');
    }

    public function index(){
      $products = Products::All()->count();
      $categories = categories::All()->count();
      $subcategories = Subcategories::all()->count();
      $customers = User::All()->count();
      $orders = Orders::all()->count();
      $orderItems = OrderItems::all()->count();
      // $latestProducts = Products::latest()->select('image')->take(5)->get();
      return view('admin/dashboard')->with('products', $products)
                                    ->with('categories', $categories)
                                    ->with('subcategories', $subcategories)
                                    ->with('customers', $customers)
                                    ->with('orders', $orders)
                                    ->with('orderItems', $orderItems);
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
      $orders = Orders::with('orderItems')->get();
      return view('admin.orders.orders', compact('orders'));
    }
    public function orderItems($id){
      $items = Products::with('orderItems')->whereHas('orderItems', function($query) use($id){
        $query->where('orders_id', $id);
      })->get();
      return view('admin.orders.orderItems', compact('items'));
    }
}
