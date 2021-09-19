<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('site.home.home');
//})->name('home');

Route::namespace("Site")->group(function () {
    Route::get('/', 'MainController@index')->name('home');
    Route::get('home', 'HomeController@index')->name('homepage');
    Route::get('about', 'AboutUsController@index')->name('about');
    Route::get('heritage', "HeritageController@index")->name('heritage');
    Route::get('get-heritage-data', "HeritageController@show")->name('getHeritageData');
    Route::get('heritage-detail/{id}', "HeritageController@detail")->name('getHeritageDetail');
    Route::get('project', 'ProjectController@index')->name('project');
    Route::get('project-detail/{id}', 'ProjectController@detail')->name('projectDetail');
    Route::get('news-update', 'NewsController@index')->name('newsUpdatePage');
    Route::get('news-update-detail/{id}', 'NewsController@detail')->name('newsUpdateDetail');
    Route::get('quality-craftsmanship', 'QualityController@index')->name('quality');
    Route::get('contact-us', 'ContactUsController@index')->name('contactUs');
    Route::get('store-detail/{id}', 'ContactUsController@storeDetail')->name('storeDetail');
    Route::post('contact-us-request', 'ContactUsController@contactUsRequest')->name('contactUsRequest');
    Route::get('media-kit', 'MediaKitController@index')->name('mediaKit');
    Route::get('get-collection', 'MainController@getCollection')->name('getCollection');

    Route::prefix('shop')->group(function () {
        Route::get('/', 'ShopController@index')->name('shop');
        Route::get('/{category_id}', 'ShopController@detail')->name('shopCategory');
        Route::get('/add-to-wishlist', 'ShopController@wishlist')->name('addToWishlist');

    });

    Route::middleware('guest')->group(function () {
        Route::namespace("Authentication")->group(function () {
            Route::get('authentication', 'LoginController@loginPage')->name('loginPageUser');

            Route::post('login', 'LoginController@login')->name('loginUser');
            Route::post('registerUser', 'RegisterController@register')->name('registerUser');


            Route::get('/lost-password', 'ForgetPasswordController@forgetPasswordForm')->name('forgetPasswordFormUser');
            Route::post('/forget-password-user', 'ForgetPasswordController@forgetPassword')->name('forgetPasswordUser');

            Route::get('reset/password/{token}', 'ForgetPasswordController@resetPassword')->name('resetPasswordUser');
            Route::post('change-password-user', 'ForgetPasswordController@changePassword')->name('changePasswordUser');
        });
    });
});

Route::namespace('Admin')->group(function () {
    Route::namespace("Authentication")->group(function () {
        Route::middleware('guest')->group(function () {
//            Route::get('login', 'LoginController@loginPage')->name('loginPage');
//            Route::post('login', 'LoginController@login')->name('loginUser');
//
//            Route::get('/forget-password', 'ForgetPasswordController@forgetPasswordForm')->name('forgetPasswordForm');
//            Route::post('/forget-password', 'ForgetPasswordController@forgetPassword')->name('forgetPassword');
//
//            Route::get('reset/password/{token}', 'ForgetPasswordController@resetPassword')->name('resetPassword');
//            Route::post('change-password', 'ForgetPasswordController@changePassword')->name('changePassword');

        });


        Route::middleware(['Admin', 'auth'])->group(function () {
            Route::get('/logout', "LogoutController@logout")->name('logoutUser');

        });
    });

});
