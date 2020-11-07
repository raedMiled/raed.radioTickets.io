<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = ['name', 'timeEnd' ,'dateEnd' , 'address', 'categorie' , 'discount' , 'poster', 'places' , 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservationDeal()
    {
        return $this->hasMany(ReservationDeal::class);
    }
   
}
