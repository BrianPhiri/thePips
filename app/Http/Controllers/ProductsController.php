<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
class ProductsController extends Controller
{
    public function index(){
        // return Products::All();
        return view('admin/products');
    }
}
