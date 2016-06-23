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
  public function __construct()
  {
    $this->middleware('admin');
  }
  public function index(){
    $products = Products::/*onlyTrashed()->*/paginate(15);
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
          'place' => $post['place'],
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
    $subcategory_name = Subcategories::findOrFail($product->sub_category_id)->select('category_id','name')->first();
    $category_name = categories::findOrFail($subcategory_name->category_id)->select('name')->first();
    return view('admin.products.edit', compact('product', 'categories',  'subcategory_name', 'category_name'));
  }

  public function update($product_id, Request $input ){
    $subcategory = '';
    $image_uploads = '';
    $product = Products::findOrFail($product_id);

    if($input['sub_category_id'] == ''){
      $subcategory = $product->sub_category_id;
    }else{
      $subcategory = $input['sub_category_id']; 
    }
    if($input['file'] == ''){
      $image_uploads = $product->imgage;
    }else{
      $file = $post->file('file');
      $fileName = $file->getClientOriginalName();
      $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
      $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

      if($uploaded){
        $image_uploads = $destinationPath;
      }
    }
    
    $product->name = $input['name'];
    $product->image = $image_uploads;
    $product->sub_category_id = $subcategory;
    $product->price = $input['price'];
    $product->description = $input['description'];
    $product->save();
    return Redirect::intended('product');
  }
  public function show($product){
    $product = Products::findOrFail($product);
    $product->delete();
    return Redirect::intended('product');
  }
    // TODO: work on image edit.
  public function destroy($product_id){
    $products = Products::find($id);
    $products->delete();
    return Redirect::to('/products');
  }
}
