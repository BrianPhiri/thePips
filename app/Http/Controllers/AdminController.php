<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Products;
use App\Categories;
use App\Customers;

class AdminController extends Controller
{
    public function index(){
      return view('admin/dashboard');
    }
    public function summary(){
      $products = Products::All()->count();
      $categories = categories::All()->count();
      $customers = Customers::All()->count();
      $report[] = array('products' => "$products" ,'categories' => "$categories" ,'customers' => "$customers");
      return Response::json($report);
    }
}
