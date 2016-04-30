<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Products;
use App\Categories;
class ProductsController extends Controller
{
    public function index(){
        return Products::All();
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
