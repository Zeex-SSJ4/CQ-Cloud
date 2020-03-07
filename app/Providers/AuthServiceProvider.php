<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use function foo\func;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //define a admin user role
        // returns true if user role is set to admin
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        // define a client user role
        // return true if user role is set to client
        Gate::define('isClient', function ($user) {
            return $user->role == 'client';
        });
    }
}
