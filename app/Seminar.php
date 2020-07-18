<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = ['name', 'description'];

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
