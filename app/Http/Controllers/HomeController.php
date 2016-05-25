<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Products;
use App\Subcategories;
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
        $new = Products::latest()->take(6)->get();
        return view('homepage.index', compact('products'));
    }
    public function show($id){
      $product = Products::findOrFail($id);
      return view('homepage/single', compact('product'));
      // return $product->image;
    }
    public function categoryProducts($id){
      // $subcategories = Subcategories::with('products')->get();
      $subcategories = Subcategories::find($id)->products()->get();
      return view('homepage.products', compact('subcategories'));
    }
}
