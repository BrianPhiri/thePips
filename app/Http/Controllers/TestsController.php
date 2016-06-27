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
    $cat = array();
    for ($i=1; $i < 6; $i++) {
      // $cat[] = Categories::with('category')->latest('created_at')->take(5)->get();
      $cat[] = Categories::latest()->take(5)->get();
    }
    $cat1 = $cat[0];
    $cat2 = $cat[1];
    $cat3 = $cat[2];
    $cat4 = $cat[3];

    return $cat1;
  }
}
