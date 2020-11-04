<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['email'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
