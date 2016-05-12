<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subcategories;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('homepage._navbar', function ($view) {
            $view->with('subsub', Subcategories::with('category')->get()); 
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
