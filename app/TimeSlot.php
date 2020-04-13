<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    public function Event(){
        return $this->belongsTo('\App\Event');
    }

    public function EventApplicant(){
        return $this->belongsToMany('\App\EventApplicant');
    }
}
