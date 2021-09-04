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
    Route::get('/','MainController@index')->name('home');
    Route::get('home','HomeController@index')->name('homepage');
    Route::get('about','AboutUsController@index')->name('about');
    Route::get('heritage',"HeritageController@index")->name('heritage');
    Route::get('get-heritage-data',"HeritageController@show")->name('getHeritageData');
    Route::get('heritage-detail/{id}',"HeritageController@detail")->name('getHeritageDetail');
    Route::get('project','ProjectController@index')->name('project');
    Route::get('project-detail/{id}','ProjectController@detail')->name('projectDetail');


});

Route::namespace('Admin')->group(function () {
    Route::namespace("Authentication")->group(function () {
        Route::middleware('guest')->group(function () {
            Route::get('login', 'LoginController@loginPage')->name('loginPage');
            Route::post('login', 'LoginController@login')->name('loginUser');

            Route::get('/forget-password', 'ForgetPasswordController@forgetPasswordForm')->name('forgetPasswordForm');
            Route::post('/forget-password', 'ForgetPasswordController@forgetPassword')->name('forgetPassword');

            Route::get('reset/password/{token}', 'ForgetPasswordController@resetPassword')->name('resetPassword');
            Route::post('change-password', 'ForgetPasswordController@changePassword')->name('changePassword');

        });


        Route::middleware(['Admin', 'auth'])->group(function () {
            Route::get('/logout', "LogoutController@logout")->name('logoutUser');

        });
    });



    Route::middleware(['Admin', 'auth'])->group(function () {


    });
});
