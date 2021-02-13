<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        /*    Inertia::share('auth.user', function () {
            if (Auth::user()) {
                return [
                    'id' => Auth::user()->id,
                    'first_name' => Auth::user()->first_name,
                    'last_name' => Auth::user()->last_name,
                ];
            }
        }); */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
