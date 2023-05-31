<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
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

        Blade::if('role', function ($role) {
            return auth()->check() && auth()->user()->role->role_name === $role;
        });

        Blade::if('permission', function ($permission) {
            return auth()->check() && auth()->user()->role->permissions->contains('permission_name', $permission);
        });
    }
}
