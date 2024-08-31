<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

// use Illuminate\Auth\Access\Gate;

// use Illuminate\Contracts\Auth\Access\Gate;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('superadmin', function ($user) {
            return $user->userType->type === 'superadmin'; // Adjust based on your role setup
        });

        Gate::define('admin', function ($user) {
            return $user->userType->type === 'admin'; // Adjust based on your role setup
        });
    }
}
