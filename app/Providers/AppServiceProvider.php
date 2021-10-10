<?php

namespace App\Providers;

use App\Category;
use App\ContactUs;
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
            $contactUs = ContactUs::first();
            $view->with('footer',$footer)->with( 'contactUs',$contactUs);
        });





        view()->composer('layout.shop-layout.footer',function ($view){
            $footer = FooterManagement::first();
            $contactUs = ContactUs::first();
            $view->with('footer',$footer)->with( 'contactUs',$contactUs);
        });


        view()->composer('layout.shop-layout.navigation',function ($view){
            $headerCategories = Category::inRandomOrder()->limit('2')->get();
            $headerAllCategories = Category::all();

            $view->with('headerCategories',$headerCategories)->with('headerAllCategories',$headerAllCategories);
        });

    }
}
