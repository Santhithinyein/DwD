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

        Gate::define('management', function ($user) {
            return $user->userType->type === 'management'; // Adjust based on your role setup
        });

        Gate::define('religious', function ($user) {
            return $user->userType->type === 'religious'; // Adjust based on your role setup
        });

        Gate::define('dd', function ($user) {
            // Check if userType is one of the allowed types
            $allowedTypes = ['religious', 'admin', 'management']; // Add other types as needed
            return in_array($user->userType->type, $allowedTypes);
        });
    }
}
