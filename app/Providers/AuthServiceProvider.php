<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        //category
        Gate::define('change-content', function ($user) {
            $role=['admin','developer','content'];
            foreach ($role as $item){
                return $user->checkUser($item);
            }
        });
        Gate::define('change-user', function ($user) {
            $role=['admin','developer'];
            foreach ($role as $item){
                return $user->checkUser($item);
            }
        });

    }
}
