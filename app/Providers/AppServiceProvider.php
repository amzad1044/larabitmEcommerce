<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

    		View::composer('frontEnd.includes.header',function($view){
    			$view->with('categories',Category::where('status',1)->get());
    		});
        View::composer('frontEnd.category.category',function($view){
    			$view->with('categories',Category::where('status',1)->get());
    		});
    }
}
