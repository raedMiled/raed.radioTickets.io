<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationDeal extends Model
{
    protected $fillable = ['email'];

    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }
}
