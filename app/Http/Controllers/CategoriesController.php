<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Categories;
use Redirect;
class CategoriesController extends Controller
{
    public function index(){
<<<<<<< HEAD
        // return categories::All();
        return view('admin/category');
=======
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
>>>>>>> 52e1b2e8ac287334aef84bd982a4e9dfec9ef37f
    }
}
