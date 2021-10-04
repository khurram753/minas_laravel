<?php

namespace App\Providers;

use App\FooterManagement;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        view()->composer('layout.front-layout.footer',function ($view){
            $footer = FooterManagement::first();
            $view->with('footer',$footer);
        });
    }
}
