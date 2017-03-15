<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('quicktab', [
    'as' => 'quicktab',
    'uses' => 'Foostart\Quicktab\Controllers\Front\QuicktabFrontController@index'
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
        Route::get('admin/quicktab', [
            'as' => 'admin_quicktab',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/quicktab/edit', [
            'as' => 'admin_quicktab.edit',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/quicktab/edit', [
            'as' => 'admin_quicktab.post',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/quicktab/delete', [
            'as' => 'admin_quicktab.delete',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////




        
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
         Route::get('admin/quicktab_category', [
            'as' => 'admin_quicktab_category',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabCategoryAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/quicktab_category/edit', [
            'as' => 'admin_quicktab_category.edit',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabCategoryAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/quicktab_category/edit', [
            'as' => 'admin_quicktab_category.post',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabCategoryAdminController@post'
        ]);
         /**
         * delete
         */
        Route::get('admin/quicktab_category/delete', [
            'as' => 'admin_quicktab_category.delete',
            'uses' => 'Foostart\Quicktab\Controllers\Admin\QuicktabCategoryAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
    });
});
