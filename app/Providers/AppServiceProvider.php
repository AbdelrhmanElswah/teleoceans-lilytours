<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use Schema;

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
        if (Schema::hasTable('categories') && Schema::hasTable('contacts')) {
            view()->share('categories' , Category::with('sub_category')->get());
            view()->share('contact' , Contact::first());
        }

    }
}
