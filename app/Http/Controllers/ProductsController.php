<?php

namespace App\Http\Controllers;

use Request;
use Response;

use App\Http\Requests;
use App\Products;
use App\Categories;
use App\Subcategories;
use Redirect;
use Illuminate\Support\Facades\Input;
class ProductsController extends Controller
{
    public function index(){
        $products = Products::All();
        return view('admin.products.products', compact('products'));
    }
    public function subcategory(){
      $cat_id = Input::get('category_number');
      $subcategories = Subcategories::where('category_id', '=', $cat_id)
                    ->orderBy('name', 'asc')
                    ->get();

     return Response::json($subcategories);
   }

    public function create(){
      $categories = categories::All();
      return view('admin.products.productsAdd', compact('categories'));
    }

    public function store(){
      $input = Request::all();
      Products::create($input);

      return Redirect::intended('product');
    }

    public function edit($product_id){
      $product = Products::findOrFail($product_id);
      $categories = categories::All();
      return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update($product_id){
      $input = Request::all();
      $product = Products::findOrFail($product_id);
      $product->product_name = $input['product_name'];
      $product->sub_category_id = $input['sub_category_id'];
      $product->product_price = $input['product_price'];
      $product->product_description = $input['product_description'];
      $product->save();
      return Redirect::intended('product');
    }
}
