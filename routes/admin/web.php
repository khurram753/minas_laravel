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


        Route::get('user-listing', 'UserController@index')->name('userListing');
        Route::get('create-user', 'UserController@create')->name('userCreate');
        Route::post('save-user', 'UserController@save')->name('userSave');
        Route::get('edit-user/{id}', 'UserController@edit')->name('userEdit');
        Route::post('update-user', 'UserController@update')->name('userUpdate');
        Route::post('user-delete', 'UserController@delete')->name('userDelete');


        Route::get('type-listing', 'TypeController@index')->name('typeListing');
        Route::get('create-type', 'TypeController@create')->name('typeCreate');
        Route::post('save-type', 'TypeController@save')->name('typeSave');
        Route::get('edit-type/{id}', 'TypeController@edit')->name('typeEdit');
        Route::post('update-type', 'TypeController@update')->name('typeUpdate');
        Route::post('type-delete', 'TypeController@delete')->name('typeDelete');


        Route::get('wear-size-listing', 'WearSizeController@index')->name('wearSizeListing');
        Route::get('create-wear-size', 'WearSizeController@create')->name('wearSizeCreate');
        Route::post('save-wear-size', 'WearSizeController@save')->name('wearSizeSave');
        Route::get('edit-wear-size/{id}', 'WearSizeController@edit')->name('wearSizeEdit');
        Route::post('update-wear-size', 'WearSizeController@update')->name('wearSizeUpdate');
        Route::post('wear-size-delete', 'WearSizeController@delete')->name('wearSizeDelete');

        Route::get('body-type-listing', 'BodyTypeController@index')->name('bodyTypeListing');
        Route::get('create-body-type', 'BodyTypeController@create')->name('bodyTypeCreate');
        Route::post('save-body-type', 'BodyTypeController@save')->name('bodyTypeSave');
        Route::get('edit-body-type/{id}', 'BodyTypeController@edit')->name('bodyTypeEdit');
        Route::post('update-body-type', 'BodyTypeController@update')->name('bodyTypeUpdate');
        Route::post('body-type-delete', 'BodyTypeController@delete')->name('bodyTypeDelete');

        Route::get('style-listing', 'StyleController@index')->name('styleListing');
        Route::get('create-style', 'StyleController@create')->name('styleCreate');
        Route::post('save-style', 'StyleController@save')->name('styleSave');
        Route::get('edit-style/{id}', 'StyleController@edit')->name('styleEdit');
        Route::post('update-style', 'StyleController@update')->name('styleUpdate');
        Route::post('style-delete', 'StyleController@delete')->name('styleDelete');

        Route::get('size-listing', 'SizeController@index')->name('sizeListing');
        Route::get('create-size', 'SizeController@create')->name('sizeCreate');
        Route::post('save-size', 'SizeController@save')->name('sizeSave');
        Route::get('edit-size/{id}', 'SizeController@edit')->name('sizeEdit');
        Route::post('update-size', 'SizeController@update')->name('sizeUpdate');
        Route::post('size-delete', 'SizeController@delete')->name('sizeDelete');

        Route::get('product-listing', 'ProductController@index')->name('productListing');
        Route::get('create-product', 'ProductController@create')->name('productCreate');
        Route::post('save-product', 'ProductController@save')->name('productSave');
        Route::get('edit-product/{id}', 'ProductController@edit')->name('productEdit');
        Route::post('update-product', 'ProductController@update')->name('productUpdate');
        Route::post('product-delete', 'ProductController@delete')->name('productDelete');
        Route::get('category-size','ProductController@getCategorySize')->name('getCategorySize');
        Route::get('delete-gallery/{id}','ProductController@deleteGallery')->name('delete-gallery');
        Route::post('update-gallery','ProductController@updateGallery')->name('update-gallery');


    });
});
