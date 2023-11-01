<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Features;
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
use Illuminate\Support\ServiceProvider;

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

=======
        Schema::defaultStringLength(191);
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
    }
}
