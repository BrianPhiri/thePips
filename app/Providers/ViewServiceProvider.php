<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subcategories;
use App\Categories;
use App\ShopCart;
use App\User;
use Auth;
use Cart;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['homepage._navbar','layouts.master','homepage._footer'], function ($view) {
            $view->with('subsub', Categories::with('category')->get());
            // Gets the number of items in the Authenticated users shop cart.
            if(Auth::check())
            {
                $view->with('cartdb', ShopCart::where('user_id',Auth::user()->id)->count());
            }
            // Return number of items in the session cart
            else
            {
                $view->with('cart',Cart::instance('shopping')->count());
            }
        });

        view()->composer(['homepage._sidebar'], function ($view){
          $cat = array();
            for ($i=1; $i < 5; $i++) {
                $cat[] = Categories::with('category')->latest('created_at');
            }
            $cat1 = $cat[0];
            $cat2 = $cat[1];
            $cat3 = $cat[2];
            $cat4 = $cat[3];
            // $cat5 = $cat[4];

            // $view->with('cat1','cat2','cat3','cat4','cat5');
            $view->with('cat', Categories::with('category')->latest('created_at')->take(5)->get());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
