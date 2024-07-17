<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**

 * The policy mappings for the application.

 *

 * @var array

 */

    protected $policies = [



    ];
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
        // $this->registerPolicies();



        /* define a admin user role */

        Gate::define('isAdmin', function ($user) {

            return $user->role == 'admin';

        });



        /* define a manager user role */

        Gate::define('isManager', function ($user) {

            return $user->role == 'manager';

        });



        /* define a user role */

        Gate::define('isUser', function ($user) {

            return $user->role == 'user';

        });
    }
}
