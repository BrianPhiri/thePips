<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;

class TestsController extends Controller
{
  public function index(){
    // $product = Products::all()->random(1);
    $products = Products::All();
    $product= array();
    for ($i=1; $i < 7; $i++) { 
      $product[] = Products::all()->random(1);
    }
    $prd1 = $product[0];
    $prd2 = $product[1];
    $prd3 = $product[2];
    $prd4 = $product[3];
    $prd5 = $product[4];
    $prd6 = $product[5];
    return view('homepage.index', compact('products','prd1','prd2', 'prd3', 'prd4', 'prd5', 'prd6'));
  }

}
