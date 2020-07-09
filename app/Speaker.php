<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    public function Seminar()
    {
        return $this->belongsToMany(Seminar::class);
    }
}
