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
use Illuminate\Support\Facades\Input;
use Response;

class CartController extends Controller
{
  /**
    * Adding items to the non-persistent shop cart
  */
  public function addItem()
  {
    $products = Request::all();
    $id = $products['product_id'];
    $products_db = Products::findOrFail($id);

    if(Auth::check())
    {
      $cartContent = Cart::instance('shopping')->content();

      // If there is sth in the cart. Iterate through the session cart and add it to the database.
      if(count($cartContent))
      {
        foreach ($cartContent as $contents) 
        {
          $cart = new ShopCart();
          $cart->user_id = Auth::user()->id;
          $cart->products_id = $contents->id;
          $cart->quantity = $contents->qty;
          $cart->save();
        }
        // Empty the Session Shop Cart
        Cart::instance('shopping')->destroy();

        return redirect()->intended('shopCart'); 

      }
      else
      {
        // Determines if the product exists in the database if true increments the quantity by 1.
        $cart = ShopCart::where('user_id',Auth::user()->id)->where('products_id',$id)->first();
        if($cart)
        {
          $cart->quantity += 1;
          $cart->save();
          // return $cart->quantity;
          return redirect('shopCart');
        }
        // Create a new Item.
        $shopCart = new shopCart();
        $shopCart->user_id = Auth::user()->id;
        $shopCart->products_id = $id;
        $shopCart->quantity = 1;
        $shopCart->save();

        return redirect()->intended('shopCart'); 
      }   
    }
    else
    {
      Cart::instance('shopping')->add(['id' => $products_db->id, 'name' => $products_db->name, 'qty' => 1, 'price' => $products_db->price, 'options' => ['url_path' => $products_db->image]]);     
      return redirect()->intended('shopCart');
    }
  }
  /**
   * This displays the cart.blade view
  */
  public function showCart()
  {
    // Determines the View the user's gonna see. Depending on the authentication status.
    if(!Auth::check())
    {
      $content = Cart::instance('shopping')->content();
      // Contents of the db do not exist
      $db_content = null;
      $total = null;
      return view('homepage.cart',compact('content','db_content','total'));
    }
    else{
      // Awesome!!
      $db_content = ShopCart::where('user_id',Auth::user()->id)->with('products')->get();
      $total=0;
      foreach($db_content as $item){
        $total += $item->products->price*$item->quantity;
      }
      // Means that contents of the Session are null.
      $content = null;
      // return $total;
      return view('homepage.cart',compact('db_content','content','total'));
    }
  }
  /*
  This function uses the $GET method to retrieve the productID 
  and either increment, decrement or removal values.
  */
  public function cart()
  {
    // increments the quantity
    if (Request::get('product_id') && (Request::get('increment')) == 1) {
      $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
      $item = Cart::instance('shopping')->get($rowId[0]);

      Cart::instance('shopping')->update($rowId[0], $item->qty + 1);
    }

    // decrease the quantity
    if (Request::get('product_id') && (Request::get('decrease')) == 1) {
      $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
      $item = Cart::instance('shopping')->get($rowId[0]);

      Cart::instance('shopping')->update($rowId[0], $item->qty - 1);
    }

     // removes an Item
    if (Request::get('product_id') && (Request::get('remove')) == 1) 
    {
      $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
      Cart::remove($rowId[0]);
    }

    $content = Cart::instance('shopping')->content();
    return redirect('shopCart');
  }
    /**
     * Database Updates
    */
    public function cartDb()
    {
    // increments the quantity in db
      if (Request::get('product_id') && (Request::get('increment')) == 1) {
        $cartItem = ShopCart::where('products_id',Request::get('product_id'))->first();
        $cartItem->quantity += 1;
        $cartItem->save();

        return redirect()->intended('shopCart');
      }

    // decrease the quantity in db
      if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $cartItem = ShopCart::where('products_id',Request::get('product_id'))->first();
        $cartItem->quantity -= 1;
        $cartItem->save();
        // Once the quantity is 0 the item is deleted from the database.
        ShopCart::where('quantity', 0)->delete();

        return redirect()->intended('shopCart');
      }

     // removes an Item from db
      if (Request::get('product_id') && (Request::get('remove')) == 1) 
      {
        ShopCart::where('products_id',Request::get('product_id'))->delete();

        return redirect()->intended('shopCart');
      }
    }
  /**
    * Deletes all Items From the Cart
    */
  public function destroyCart()
  {
    Cart::instance('shopping')->destroy();
    return redirect()->back();
  }
  /**
   * Deletes the Cart from the Database
   */
  public function destroyDbCart()
  {
    ShopCart::where('user_id',Auth::user()->id)->delete();
    return redirect()->back();
  }
  /**
    * Test Function
  */
  public function cartTest()
  {
    $test = Cart::instance('shopping')->content();
    // Determines if there is anything in the cart array.
    if(count($test))
    {
      return 'There is sth in the cart';
    }
    else
    {
      return 'I am an empty cart';
    }
  }

  // Testing response AJAX
  public function addToSession()
  {
    // $rowId = Cart::instance('shopping')->search(array('id' => intval(Request::get('product_id'))));
    // $item = Cart::instance('shopping')->get($rowId[0]);

    // Cart::instance('shopping')->update($rowId[0], $item->qty + 1);
    $content = Cart::instance('shopping')->content();
    foreach ($content as $contents) 
    {
      return Response::json(array(
        'id'=>$contents->id,
        'name'=>$contents->name,
        'quantity'=>$contents->qty,
        'price'=>$contents->price,
        'subtotal'=>$contents->subtotal
        ));
    }
  }

}
