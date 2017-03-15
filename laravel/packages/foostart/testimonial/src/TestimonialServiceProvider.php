<?php

namespace Foostart\Testimonial;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class TestimonialServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application testimonials.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/testimonial_admin.php' => config_path('testimonial_admin.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'testimonial');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'testimonial');


        /**
         * Load view composer
         */
        $this->testimonialViewComposer($request);

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');

    }

    /**
     * Register the application testimonials.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foostart\Testimonial\Controllers\Admin\TestimonialAdminController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'testimonial');
    }

    /**
     *
     */
    public function testimonialViewComposer(Request $request) {

        view()->composer('testimonial::testimonial*', function ($view) {
            global $request;
            $testimonial_id = $request->get('id');
            $is_action = empty($testimonial_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Testimonials
                 */
                //list
                trans('testimonial::testimonial_admin.page_list') => [
                    'url' => URL::route('admin_testimonial'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('testimonial::testimonial_admin.'.$is_action) => [
                    'url' => URL::route('admin_testimonial.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],

//                /**
//                 * Categories
//                 */
//                //list
//                trans('testimonial::testimonial_admin.page_category_list') => [
//                    'url' => URL::route('admin_testimonial_category'),
//                    "icon" => '<i class="fa fa-users"></i>'
//                ],
            ]);
            //
        });
    }

}
