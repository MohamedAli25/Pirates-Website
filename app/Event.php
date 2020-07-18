<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function TimeSlot()
    {
        return $this->hasMany('\App\TimeSlot');
    }
}
