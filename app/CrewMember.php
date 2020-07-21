<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model
{
    protected $fillable = ['user_id', 'committee_id', 'position_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
