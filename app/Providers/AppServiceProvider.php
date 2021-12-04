<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

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
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }
}
