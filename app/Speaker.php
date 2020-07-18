<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = ['name', 'description', 'photo'];

    public function seminars()
    {
        return $this->belongsToMany(Seminar::class);
    }
}
