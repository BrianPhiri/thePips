<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subcategories;
use App\Categories;
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
            $view->with('subsub', Categories::with('category')->get());
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
