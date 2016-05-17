<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request as Request;
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

    public function store(Request $post){
      if($post->hasFile('file')){
        $file = $post->file('file');

        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

        if($uploaded){
          Products::create([
            'name' => $post['name'],
            'sub_category_id' => $post['sub_category_id'],
            'price' => $post['price'],
            'image' => $destinationPath,
            'description' => $post['description']
          ]);
        }
      }
      return Redirect::intended('product');
    }

    public function edit($product_id){
      $product = Products::findOrFail($product_id);
      $categories = categories::All();
      return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update($product_id, Request $input ){
      // $input = Request::all();
      $product = Products::findOrFail($product_id);
      $product->name = $input['name'];
      $product->sub_category_id = $input['sub_category_id'];
      $product->price = $input['price'];
      $product->description = $input['description'];
      $product->save();
      return Redirect::intended('product');
    }
    public function show($product){
      return $product;
    }

    public function destroy($product){
      return $product;
    }
    // TODO: work on image edit.
}
