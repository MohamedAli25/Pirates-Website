<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    public function Speaker(){
        return $this->hasMany('\App\Speaker');
    }
}
