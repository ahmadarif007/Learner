<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontEnd.home.homeContent', function($view) {
            $products = Product::all();
            $view->with('products', $products);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
