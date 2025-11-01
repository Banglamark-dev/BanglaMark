<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        view()->composer('layouts.site', function($view){

            
            $view->with('menus', \App\Models\Division::with(['subdivisions'])->orderBy('sort')->get());
            
            });
    }
}
