<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function firstPreferenceApplicants()
    {
        return $this->hasMany(EventApplicant::class, 'first_preference_id');
    }

    public function secondPreferenceApplicants()
    {
        return $this->hasMany(EventApplicant::class, 'second_preference_id');
    }
}
