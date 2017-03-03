<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('sample', [
    'as' => 'sample',
    'uses' => 'Foostart\Sample\Controllers\Front\SampleFrontController@index'
]);

Route::get('slideshow', [
    'as' => 'slideshow',
    'uses' => 'Foostart\Sample\Controllers\Front\SampleFrontController@viewslideshow'
]);

/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        /**
         * list
         */
        Route::get('admin/sample', [
            'as' => 'admin_sample',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/sample/edit', [
            'as' => 'admin_sample.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@edit_sample'
        ]);

        /**
         * post
         */
        Route::post('admin/sample/edit', [
            'as' => 'admin_sample.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/sample/delete', [
            'as' => 'admin_sample.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@delete_sample'
        ]);
        /**
         * list
         */
        /*-------------------------------------SLIDESHOW-------------------------------------*/
        Route::get('admin/slideshow', [
            'as' => 'admin_slideshow',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@index_slideshow'
        ]);
        /**
         * edit-add
         */
        Route::get('admin/slideshow/edit', [
            'as' => 'admin_slideshow.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@edit_slideshow'
        ]);

        /**
         * post
         */
        Route::post('admin/slideshow/edit', [
            'as' => 'admin_slideshow.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@post_slideshow'
        ]);

        /**
         * delete
         */
        Route::get('admin/slideshow/delete', [
            'as' => 'admin_slideshow.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@delete_slideshow'
        ]);
        /**
         * list
         */
        /*-------------------------------------SLIDESHOW-------------------------------------*/
        /*------------------------------------CATEGORIES-----------------------------------*/
        /**
         * list
         */
        Route::get('admin/sample_category', [
            'as' => 'admin_sample_category',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@index_category'
        ]);

          Route::get('admin/sample_category/edit', [
            'as' => 'admin_sample_category.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@edit_sample_category'
        ]);
          /**
         * post
         */
        Route::post('admin/sample_category/edit', [
            'as' => 'admin_sample_category.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@post_sample_category'
        ]);
        
        /**
         * delete
         */
        Route::get('admin/sample_category/delete', [
            'as' => 'admin_sample_category.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@delete_sample_category'
        ]);
          /*------------------------------------CATEGORIES----------------------------------*/
    });
});
