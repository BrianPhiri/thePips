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
      if(Input::has('file')){
        // return $file = Input::file('file');
        $path = Input::file('file')->getRealPath();
        $name = Input::file('file')->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath');
        Input::file('file')->move($destinationPath, $name);
        $uploaded = Storage::put($destinationPath, $path);
        if($uploaded){
          return "success";
        }
        // Input::file('file')->move($destinationPath);
      }
      // Products::create($input);
      // return Redirect::intended('product');
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
      $product->sub_category_id = $input['sub_0category_id'];
      $product->price = $input['price'];
      $product->description = $input['description'];
      $product->save();
      return Redirect::intended('product');
    }

    // TODO: Add image uplod function
    // for image uploads.

    public function test(){
      // return "hey";
      $categories = Categories::with('category')->get();
      // return Response::json(array('data' => $categories));
      return $categories;

    }
}
