<?php

namespace App\Providers;

use App\Event;
use App\User;

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

        Gate::define('show-event',function(User $user,Event $event){
            return  $event->user->is($user);
        });
        
        
        Gate::define('show-reservation-button',function(User $user,Event $event){
            if($user->id != $event->user_id)
            return  $event;
            
        });

       
        
    }
}
