<?php

namespace App\Providers;

use App\Event;
use App\User;
use App\Reservation;
use App\Ability;
use App\Role;


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

        Gate::define('show-reservation-list',function($user,$reservation){
            
            return $reservation->user->is($user);
            
        });
       /* Gate::define(function($user,$ability){
            
            return $user->abilities()->contains($ability);
            
        });*/
        Gate::before(function ($user, $ability) {
            if ($user->abilities()->contains($ability)) {
                return true;   
            }
        });

       
        
    }
}
