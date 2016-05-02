<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Categories;
use Redirect;

class CategoriesController extends Controller
{
    public function index(){
      $categories = categories::All();
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
}
