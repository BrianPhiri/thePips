<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Products::All();
        return view('homepage.index', compact('products'));
    }
    public function show($id){
      $product = Products::findOrFail($id);
      return view('homepage/single', compact('product'));
      // return $product->image;
    }
}
