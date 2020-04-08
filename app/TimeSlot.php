<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    public function Event(){
        return $this->belongsTo('app/Event');
    }

    public function EventApplicant(){
        return $this->belongsToMany('app/EventApplicant');
    }
}
