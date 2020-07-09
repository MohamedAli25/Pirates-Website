<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function eventApplicant()
    {
        return $this->belongsToMany(EventApplicant::class);
    }
}
