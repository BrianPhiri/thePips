<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;

class SearchController extends Controller
{
    public function executeSearch()
    {
      $keywords = Input::get('keywords');
      $products = Products::all();
      $searched = new \Illuminate\Database\Eloquent\Collection();
      foreach ($products as $product)
      {
        if(Str::contains(Str::lower($product->name), Str::lower($keywords)))
          $searched->add($product);
      }
        
        return view('homepage.searchedUsers', compact('searched'));
    }
}
