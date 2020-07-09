<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    public function seminars()
    {
        return $this->belongsToMany(Seminar::class);
    }
}
