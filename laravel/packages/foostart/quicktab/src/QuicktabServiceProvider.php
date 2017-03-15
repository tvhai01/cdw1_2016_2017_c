<?php

namespace Foostart\Quicktab;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class QuicktabServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/quicktab_admin.php' => config_path('quicktab_admin.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'quicktab');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'quicktab');


        /**
         * Load view composer
         */
        $this->quicktabViewComposer($request);

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foostart\Quicktab\Controllers\Admin\QuicktabAdminController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'quicktab');
    }

    /**
     *
     */
    public function quicktabViewComposer(Request $request) {

        view()->composer('quicktab::quicktab*', function ($view) {
            global $request;
            $quicktab_id = $request->get('id');
            $is_action = empty($quicktab_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Quicktabs
                 */
                //list
                trans('quicktab::quicktab_admin.page_list') => [
                    'url' => URL::route('admin_quicktab'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('quicktab::quicktab_admin.'.$is_action) => [
                    'url' => URL::route('admin_quicktab.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],

//                /**
//                 * Categories
//                 */
//                //list
//                trans('quicktab::quicktab_admin.page_category_list') => [
//                    'url' => URL::route('admin_quicktab_category'),
//                    "icon" => '<i class="fa fa-users"></i>'
//                ],
            ]);
            //
        });
    }

}
