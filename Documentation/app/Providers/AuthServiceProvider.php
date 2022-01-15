<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // isAdmin
        // Gate::define('isAdmin', function($user) {
        //     return $user->role=='admin';
        // });

        // Is
        // Gate::define('isManager', function($user) {
        //     return $user->role=='manager';
        // });
        // Gate::define('isUser', function($user) {
        //     return $user->role=='user';
        // });

        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });
        /**
         * Define Gate for editor user role
         * Returns true if user role is set to editor
         **/
        Gate::define('isEditor', function($user) {
            return $user->role == 'editor';
        });
        /**
         * Define Gate for guest user role
         * Returns true if user role is set to guest
         **/
        Gate::define('isGuest', function($user) {
            return $user->role == 'guest';
        });



    }
}
