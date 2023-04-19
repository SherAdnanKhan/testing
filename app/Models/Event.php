<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
