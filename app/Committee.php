<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = ['name'];

    public function crewMembers()
    {
        return $this->hasMany(CrewMember::class);
    }
}
