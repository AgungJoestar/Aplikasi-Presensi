<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isSuper_admin', function($user){
            return $user->user_type == 'super_admin';
        });
        $gate->define('isAdmin', function($user){
            return $user->user_type =='admin';
        });
        $gate->define('isReguler', function($user){
            return $user->user_type == 'reguler';
        });
        $gate->define('isBimbel',function($user){
            return $user->user_type == 'bimbel';
        });
        $gate->define('isPesantren',function($user){
            return $user->user_type == 'pesantren';
        });
        $gate->define('isPasca_mubaligh',function($user){
            return $user->user_type == 'pasca_mubaligh';
        });
        $gate->define('isPra_mubaligh',function($user){
            return $user->user_type == 'pra_mubaligh';
        });
    }
}
