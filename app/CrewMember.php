<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model
{
    public function Position(){
        return $this->hasOne('app/Position');
    }
}
