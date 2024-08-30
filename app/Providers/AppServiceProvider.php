<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        View::share('global_data', 'значение переменной в AppServiceProvider');

        view()->composer('user*', function ($view) {   //расшарить переменную только на роуты, начинающиеся с admin...
            $view->with('balance','Значение этой переменной расшарено только для роута user*');                  
            
        });
    }
}
