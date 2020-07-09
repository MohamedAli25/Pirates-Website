<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function eventApplicants()
    {
        return $this->hasMany(EventApplicant::class);
    }
}
