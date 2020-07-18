<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventApplicant extends Model
{
    protected $fillable = ['user_id', 'event_id', 'time_slot_id', 'first_preference_id', 'second_preference_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class);
    }

    public function firstPreference()
    {
        return $this->belongsTo(Preference::class, 'first_preference_id');
    }

    public function secondPreference()
    {
        return $this->belongsTo(Preference::class, 'second_preference_id');
    }
}
