<?php

namespace App\Http\Controllers;

use Request;
use Redirect;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;
use App\Subcategories;
use App\Categories;

class SubcategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }
  public function index(){
    $subcategories = Subcategories::paginate(15);
    return view('admin.subcategory.subcategory', compact('subcategories'));
  }
  public function create(){
    $categories = Categories::All();
    return view('admin.subcategory.subcategoryAdd', compact('categories'));
  }
  public function store(){
    $input = Request::All();
    Subcategories::create($input);
    return Redirect::intended('subcategory');
  }

  public function edit($subcategory_id){
    $subcategory = Subcategories::findOrFail($subcategory_id);
    $categories = Categories::All();
    return view('admin.subcategory.edit', compact('subcategory', 'categories'));
  }
  public function update($subcategory_id){
    $input = Request::all();
    $subcategory = Subcategories::findOrFail($subcategory_id);
    $subcategory->category_id = $input['category_id'];
    $subcategory->name = $input['name'];
    $subcategory->description = $input['description'];
    $subcategory->save();
    return Redirect::intended('subcategory');
  }
  public function show($subcategory){
    $subcategory = Subcategories::findOrFail($subcategory);
    $subcategory->delete();
    return Redirect::intended('subcategory');
  }
  public function destroy($product_id){
    $subcategory = Subcategories::find($id);
    $subcategory->delete();
    return Redirect::to('/subcategories');
  }
}
