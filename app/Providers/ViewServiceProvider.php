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
