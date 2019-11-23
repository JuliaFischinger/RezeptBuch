<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezepte extends Model
{
    protected $fillable = [
        'gericht', 'zutaten', 'zubereitung', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
/*
    public function comments()
    {
        return $this->hasMany(RezeptComment::class);
    }*/
}

