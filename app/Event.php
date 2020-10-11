<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;




class Event extends Model
{
    protected $fillable = ['name','date' , 'categorie' , 'poster'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    /*use Notifiable;

    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    /*public function routeNotificationForNexmo($notification)
    {
        return '+216 51 899 826';
    }*/
    
}
