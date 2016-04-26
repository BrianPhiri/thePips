<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categories;
class CategoriesController extends Controller
{
    public function index(){
        // return categories::All();
        return view('admin/category');
    }
}
