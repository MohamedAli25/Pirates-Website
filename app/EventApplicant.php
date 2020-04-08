<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventApplicant extends Model
{
    public function TimeSlot(){
        return $this->hasOne('app/TimeSlot');
    }
}
