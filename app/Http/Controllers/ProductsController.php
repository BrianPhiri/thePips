<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Products;
class ProductsController extends Controller
{
    public function index(){
        return Products::All();
    }
    public function create(){
      return view('admin/productsAdd');
    }
    public function store(){}
}
