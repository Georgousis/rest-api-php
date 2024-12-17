<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // we set the default string length to 190 because we're setting up the database with utf8mb4_unicode_ci collation 
        Schema::defaultStringLength(190);

    }
}
