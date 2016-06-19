<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;
use App\Categories;
use Redirect;

class CategoriesController extends Controller
{
    public function __construct()
    {
      $this->middleware('admin');
    }
    
    public function index(){
      $categories = categories::paginate(15);
      return view('admin.categories.category', compact('categories'));
    }

    public function create(){
      return view('admin.categories.categoryAdd');
    }

    public function store(){
      $input = Request::all();
      categories::create($input);
      return Redirect::intended('category');

    }
    public function edit($category_id){
      $category = categories::findOrFail($category_id);
      return view('admin.categories.edit', compact('category'));
    }

    public function update($category_id){
      $input = Request::all();
      $category = categories::findOrFail($category_id);
      $category->name = $input['name'];
      $category->description = $input['description'];
      $category->save();
      return Redirect::intended('category');
    }
    public function show($category_id){
      $category = Categories::findOrFail($category_id);
      $category->delete();
      return Redirect::intended('category');
    }
    public function destroy($category_id){
      $category = Categories::find($id);
      $products->delete();
      return Redirect::to('/categories');
    }
}
