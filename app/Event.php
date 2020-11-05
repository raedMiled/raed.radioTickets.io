<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;




class Event extends Model
{
    protected $fillable = ['name', 'time' ,'date' , 'address', 'categorie' , 'poster', 'places' , 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
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
