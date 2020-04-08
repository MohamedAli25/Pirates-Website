<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function CrewMembers(){
        return $this->belongsToMany('app/CrewMembers');
    }
}
