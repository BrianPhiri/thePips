<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\CartItem;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use App\ShopCart;
use App\Products;
use App\User;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Illuminate\Support\Collection;
use App\Http\Requests;
use Cart;

class CartController extends Controller
{
  // Adding items to the non-persistent shop cart
  public function addItem()
  {
    $products = Request::all();
    $id = $products['product_id'];
    $products_db = Products::findOrFail($id);
    Cart::instance('shopping')->add(['id' => $products_db->id, 'name' => $products_db->name, 'qty' => 1, 'price' => $products_db->price, 'options' => ['url_path' => $products_db->image]]);
    $content = Cart::instance('shopping')->content();
    return view('homepage.cart',compact('content'));
  }
  // Delete all Items From the Cart
  public function destroyCart()
  {
    Cart::instance('shopping')->destroy();
  }

  // increment
  public function cart()
  {
    if (Request::get('product_id') && (Request::get('increment')) == 1) {
        $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
        $item = Cart::instance('shopping')->get($rowId[0]);

        Cart::instance('shopping')->update($rowId[0], $item->qty + 1);
    }
    //decrease the quantity
    if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
        $item = Cart::instance('shopping')->get($rowId[0]);

        Cart::instance('shopping')->update($rowId[0], $item->qty - 1);
    }

    $content = Cart::instance('shopping')->content();
    return view('homepage.cart',compact('content'));
    }
}
