<?php

namespace App\Permissions;

use Illuminate\Support\Facades\Gate;

class Abilities
{
    public static function defineAbilities()
    {
        //Manage Users
        Gate::define('view-user', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('add-user', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('edit-user', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('delete-user', function ($user) {
            return $user->hasRole('admin');
        });
        //Manage Roles
        Gate::define('add-role', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('edit-role', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('delete-role', function ($user) {
            return $user->hasRole('admin');
        });
        //Manage Announcements
        Gate::define('display-ads', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('add-ads', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('edit-ads', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('delete-ads', function ($user) {
            return $user->hasRole('admin');
        });
        //MAnage Vehicles
        Gate::define('display-vehicle', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('add-vehicle', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('edit-vehicle', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('delete-vehicle', function ($user) {
            return $user->hasRole('admin');
        });
        //Manage Catalogue
        Gate::define('display-catalogue', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('add-catalogue', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('edit-catalogue', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('delete-catalogue', function ($user) {
            return $user->hasRole('admin');
        });
    }
}
