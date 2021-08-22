<?php
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->group(function () {
    Route::namespace("Authentication")->group(function () {
        Route::middleware('guest')->group(function () {
            Route::get('admin-login', 'LoginController@loginPage')->name('loginPage');
            Route::post('admin-post-login', 'LoginController@login')->name('loginUser');

            Route::get('/admin-forget-password', 'ForgetPasswordController@forgetPasswordForm')->name('forgetPasswordForm');
            Route::post('/admin-forget-password', 'ForgetPasswordController@forgetPassword')->name('forgetPassword');

            Route::get('admin-reset/password/{token}', 'ForgetPasswordController@resetPassword')->name('resetPassword');
            Route::post('admin-change-password', 'ForgetPasswordController@changePassword')->name('changePassword');

        });


        Route::middleware(['Admin', 'auth'])->group(function () {
            Route::get('/logout', "LogoutController@logout")->name('logoutUser');

        });
    });



    Route::middleware(['Admin', 'auth'])->group(function () {
        Route::get('dashboard','DashboardController@index')->name('adminDashboard');

        Route::get('admin-profile', 'ProfileController@profile')->name('adminProfile');
        Route::post('save-admin-profile', 'ProfileController@saveProfile')->name('adminProfileSave');

        Route::get('edit-about-us','CMSController@editAboutUs')->name('aboutUsEdit');
        Route::post('update-about-us', 'CMSController@updateAboutUs')->name('aboutUsUpdate');

        Route::get('edit-quality-craftsmanship','CMSController@editQualityCraftsmanship')->name('qualityEdit');
        Route::post('update-quality-craftsmanship', 'CMSController@updateQualityCraftsmanship')->name('qualityUpdate');

        Route::get('delete-process','CMSController@deleteProcess')->name('deleteProcess');

        Route::get('heritage-listing', 'HeritageController@index')->name('heritageListing');
        Route::get('create-heritage', 'HeritageController@create')->name('heritageCreate');
        Route::post('save-heritage', 'HeritageController@save')->name('heritageSave');
        Route::get('edit-heritage/{id}', 'HeritageController@edit')->name('heritageEdit');
        Route::post('update-heritage', 'HeritageController@update')->name('heritageUpdate');
        Route::post('heritage-delete', 'HeritageController@delete')->name('heritageDelete');

        Route::get('project-listing', 'ProjectController@index')->name('projectListing');
        Route::get('create-project', 'ProjectController@create')->name('projectCreate');
        Route::post('save-project', 'ProjectController@save')->name('projectSave');
        Route::get('edit-project/{id}', 'ProjectController@edit')->name('projectEdit');
        Route::post('update-project', 'ProjectController@update')->name('projectUpdate');
        Route::post('project-delete', 'ProjectController@delete')->name('projectDelete');
        Route::post('update-project-gallery','ProjectController@updateGallery')->name('update-project-gallery');
        Route::get('delete-project-gallery','ProjectController@deleteProjectGallery')->name('delete-project-gallery');

        Route::get('project-category-listing', 'ProjectCategoryController@index')->name('projectCategoryListing');
        Route::get('create-project-category', 'ProjectCategoryController@create')->name('projectCategoryCreate');
        Route::post('save-project-category', 'ProjectCategoryController@save')->name('projectCategorySave');
        Route::get('edit-project-category/{id}', 'ProjectCategoryController@edit')->name('projectCategoryEdit');
        Route::post('update-project-category', 'ProjectCategoryController@update')->name('projectCategoryUpdate');
        Route::post('project-category-delete', 'ProjectCategoryController@delete')->name('projectCategoryDelete');


        Route::get('category-listing', 'CategoriesController@index')->name('categoryListing');
        Route::get('create-category', 'CategoriesController@create')->name('categoryCreate');
        Route::post('save-category', 'CategoriesController@save')->name('categorySave');
        Route::get('edit-category/{id}', 'CategoriesController@edit')->name('categoryEdit');
        Route::post('update-category', 'CategoriesController@update')->name('categoryUpdate');
        Route::post('category-delete', 'CategoriesController@delete')->name('categoryDelete');

        Route::get('cords-listing', 'CordsController@index')->name('cordListing');
        Route::get('create-cords', 'CordsController@create')->name('cordCreate');
        Route::post('save-cords', 'CordsController@save')->name('cordSave');
        Route::get('edit-cords/{id}', 'CordsController@edit')->name('cordEdit');
        Route::post('update-cords', 'CordsController@update')->name('cordUpdate');
        Route::post('cords-delete', 'CordsController@delete')->name('cordDelete');

        Route::get('material-listing', 'MaterialController@index')->name('materialListing');
        Route::get('create-material', 'MaterialController@create')->name('materialCreate');
        Route::post('save-material', 'MaterialController@save')->name('materialSave');
        Route::get('edit-material/{id}', 'MaterialController@edit')->name('materialEdit');
        Route::post('update-material', 'MaterialController@update')->name('materialUpdate');
        Route::post('material-delete', 'MaterialController@delete')->name('materialDelete');


        Route::get('product-listing', 'ProductController@index')->name('productListing');
        Route::get('create-product', 'ProductController@create')->name('productCreate');
        Route::post('save-product', 'ProductController@save')->name('productSave');
        Route::get('edit-product/{id}', 'ProductController@edit')->name('productEdit');
        Route::post('update-product', 'ProductController@update')->name('productUpdate');
        Route::post('product-delete', 'ProductController@delete')->name('productDelete');


        Route::get('news-category-listing', 'NewsCategoryController@index')->name('newsCategoryListing');
        Route::get('create-news-category', 'NewsCategoryController@create')->name('newsCategoryCreate');
        Route::post('save-news-category', 'NewsCategoryController@save')->name('newsCategorySave');
        Route::get('edit-news-category/{id}', 'NewsCategoryController@edit')->name('newsCategoryEdit');
        Route::post('update-news-category', 'NewsCategoryController@update')->name('newsCategoryUpdate');
        Route::post('news-category-delete', 'NewsCategoryController@delete')->name('newsCategoryDelete');


        Route::get('news-listing', 'NewsController@index')->name('newsListing');
        Route::get('create-news', 'NewsController@create')->name('newsCreate');
        Route::post('save-news', 'NewsController@save')->name('newsSave');
        Route::get('edit-news/{id}', 'NewsController@edit')->name('newsEdit');
        Route::post('update-news', 'NewsController@update')->name('newsUpdate');
        Route::post('news-delete', 'NewsController@delete')->name('newsDelete');


        Route::get('contact-us-listing', 'ContactUsController@index')->name('contactUsListing');
        Route::get('create-contact-us', 'ContactUsController@create')->name('contactUsCreate');
        Route::post('save-contact-us', 'ContactUsController@save')->name('contactUsSave');
        Route::get('edit-contact-us/{id}', 'ContactUsController@edit')->name('contactUsEdit');
        Route::post('update-contact-us', 'ContactUsController@update')->name('contactUsUpdate');
        Route::post('contact-us-delete', 'ContactUsController@delete')->name('contactUsDelete');

        Route::get('store-listing', 'StoreController@index')->name('storeListing');
        Route::get('create-store', 'StoreController@create')->name('storeCreate');
        Route::post('save-store', 'StoreController@save')->name('storeSave');
        Route::get('edit-store/{id}', 'StoreController@edit')->name('storeEdit');
        Route::post('update-store', 'StoreController@update')->name('storeUpdate');
        Route::post('store-delete', 'StoreController@delete')->name('storeDelete');
        Route::get('delete-store-image','StoreController@deleteStoreImage')->name('deleteStoreImage');

//        Route::get('press-photos','PressController@photos')->name('press-photos');
//        Route::get('press-videos','PressController@videos')->name('press-videos');
//        Route::get('press-newYearCard','PressController@newYearCard')->name('press-newYearCard');
//        Route::get('press-mediaKit','PressController@mediaKit')->name('press-mediaKit');

        Route::get('media-kit-listing', 'PressController@index')->name('pressListing');
        Route::get('create-media-kit', 'PressController@create')->name('pressCreate');
        Route::post('save-media-kit', 'PressController@save')->name('pressSave');
        Route::get('edit-media-kit/{id}', 'PressController@edit')->name('pressEdit');
        Route::post('update-media-kit', 'PressController@update')->name('pressUpdate');
        Route::post('media-kit-delete', 'PressController@delete')->name('pressDelete');

        Route::get('media-kit-records-listing', 'PressRecordsController@index')->name('pressRecordListing');
        Route::get('create-media-kit-records', 'PressRecordsController@create')->name('pressRecordCreate');
        Route::post('save-media-kit-records', 'PressRecordsController@save')->name('pressRecordSave');
        Route::get('edit-media-kit-records/{id}', 'PressRecordsController@edit')->name('pressRecordEdit');
        Route::post('update-media-kit-records', 'PressRecordsController@update')->name('pressRecordUpdate');
        Route::post('media-kit-records-delete', 'PressRecordsController@delete')->name('pressRecordDelete');

        Route::get('user-listing', 'UserController@index')->name('userListing');
        Route::get('create-user', 'UserController@create')->name('userCreate');
        Route::post('save-user', 'UserController@save')->name('userSave');
        Route::get('edit-user/{id}', 'UserController@edit')->name('userEdit');
        Route::post('update-user', 'UserController@update')->name('userUpdate');
        Route::post('user-delete', 'UserController@delete')->name('userDelete');


    });
});
