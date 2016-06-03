<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\OrderItems;
use App\ShopCart;
class OrdersController extends Controller
{
    public function buy(){
      $shopcart = ShopCart::all();
      foreach ($shopcart as $item) {
        
      }
      return $shopcart;
    }
}
