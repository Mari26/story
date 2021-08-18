<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $policies = [

    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a admin user role */
        Gate::define('is_admin', function($user) {
            return $user->role == 'admin';
        });

        /* define a manager user role */
//        Gate::define('isManager', function($user) {
//            return $user->role == 'manager';
//        });

        /* define a user role */
        Gate::define('is_user', function($user) {
            return $user->role == 'user';
        });
    }

}
