<?php

namespace App\Http\Controllers;

use Request;
use Response;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;
use App\Products;
use App\Categories;
use App\Subcategories;
use Redirect;
use Illuminate\Support\Facades\Input;
use Storage;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::paginate(15);
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
      $product->name = $input['name'];
      $product->sub_category_id = $input['sub-category_id'];
      $product->price = $input['price'];
      $product->description = $input['description'];
      $product->save();
      return Redirect::intended('product');
    }

    // TODO: Add image uplod function
    // for image uploads.

}
