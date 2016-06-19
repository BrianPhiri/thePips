<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
use App\OrderItems;
use DB;
class TestsController extends Controller
{
  public function index(){
    // return $top = OrderItems::with('products')->count()->orderBy('products_id', 'desc')->get(); exit;
    return $top = OrderItems::with('products')->select(DB::raw('count(products_id) as prod_count, products_id'))
                     ->groupBy('products_id')
                     ->get();     
  }

}
