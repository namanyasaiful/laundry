<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        /* define a admin user role */
        Gate::define('Admin', function($user) {
            return $user->role_id == 1;
        });

        /* define a petugas user role */
        Gate::define('Kasir', function($user) {
            return $user->role_id == 2;
        });
        
        /* define a user role */
        Gate::define('Owner', function($user) {
            return $user->role_id == 3;
        });
    }
}
