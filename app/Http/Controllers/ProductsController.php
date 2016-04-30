<?php

namespace App\Http\Controllers;

use Request;
use Response;

use App\Http\Requests;
use App\Products;
use App\Categories;
use App\Subcategories;

use Illuminate\Support\Facades\Input;
class ProductsController extends Controller
{
    public function index(){
        // return Products::All();
        return view('admin/products');
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
      return view('admin/productsAdd', compact('categories'));
    }
    public function store(){
      $input = Request::all();
      return $input;
    }
}
