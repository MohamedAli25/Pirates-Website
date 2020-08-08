<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public static function shownEvents()
    {
        return Event::all()->filter(function ($event) {
            return $event->shown;
        });
    }

    protected $fillable = ['name', 'description', 'photo', 'shown', 'available'];

    public function preferences()
    {
        return $this->hasMany(Preference::class);
    }

    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function eventApplicants()
    {
        return $this->hasMany(EventApplicant::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_applicants');
    }
}
