<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categories;
class TestsController extends Controller
{
  public function index(){
    return Categories::with('category')->latest('created_at')->take(5)->get(); 
  }
}
