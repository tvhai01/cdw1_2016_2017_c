<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('testimonial', [
    'as' => 'testimonial',
    'uses' => 'Foostart\Testimonial\Controllers\Front\TestimonialFrontController@index'
]);


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/testimonial', [
            'as' => 'admin_testimonial',
            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/testimonial/edit', [
            'as' => 'admin_testimonial.edit',
            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/testimonial/edit', [
            'as' => 'admin_testimonial.post',
            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/testimonial/delete', [
            'as' => 'admin_testimonial.delete',
            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////




        
//        ////////////////////////////////////////////////////////////////////////
//        ////////////////////////////CATEGORIES///////////////////////////////
//        ////////////////////////////////////////////////////////////////////////
//         Route::get('admin/testimonial_category', [
//            'as' => 'admin_testimonial_category',
//            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialCategoryAdminController@index'
//        ]);
//
//        /**
//         * edit-add
//         */
//        Route::get('admin/testimonial_category/edit', [
//            'as' => 'admin_testimonial_category.edit',
//            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialCategoryAdminController@edit'
//        ]);
//
//        /**
//         * post
//         */
//        Route::post('admin/testimonial_category/edit', [
//            'as' => 'admin_testimonial_category.post',
//            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialCategoryAdminController@post'
//        ]);
//         /**
//         * delete
//         */
//        Route::get('admin/testimonial_category/delete', [
//            'as' => 'admin_testimonial_category.delete',
//            'uses' => 'Foostart\Testimonial\Controllers\Admin\TestimonialCategoryAdminController@delete'
//        ]);
//        ////////////////////////////////////////////////////////////////////////
//        ////////////////////////////CATEGORIES///////////////////////////////
//        ////////////////////////////////////////////////////////////////////////
    });
});
