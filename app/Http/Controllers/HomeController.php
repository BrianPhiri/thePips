<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Products;
use App\Subcategories;
use App\OrderItems;
use DB;
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
        // return $top = OrderItems::with('products')->count('products_id')->orderBy('count', 'desc')->get(); exit;
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
        // return view('homepage.index', compact('products','top','prd1','prd2', 'prd3', 'prd4', 'prd5', 'prd6'));
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
