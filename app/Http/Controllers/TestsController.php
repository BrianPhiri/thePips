<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Categories;
use App\OrderItems;
use App\Products;
use App\Orders;

class TestsController extends Controller
{
  public function index(){
      // return $top = OrderItems::with('products')->count('products_id')->orderBy('count', 'desc')->get(); exit;
      // $top = Products::with('orderItems')->orderBy('id')->count('id');
      $top = OrderItems::with('products')->select('products_id', DB::raw('COUNT(products_id) as count'))
      ->groupBy('products_id')->orderBy('count', 'desc')->take(5)->get();

      return $top;
  }
}
