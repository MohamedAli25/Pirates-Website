<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function crewMembers()
    {
        return $this->hasMany(CrewMember::class);
    }
}
