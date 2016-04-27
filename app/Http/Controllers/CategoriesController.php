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
      return view('admin/category', compact('categories'));
    }

    public function create(){
      return view('admin/categoryAdd');
    }
    
    public function store(){
      $input = Request::all();

      $category = new categories;
      $category->category_name = $input['categoryname'];
      $category->category_description = $input['categorydescription'];
      $category->save();
      return Redirect::intended('category');
    }
}
