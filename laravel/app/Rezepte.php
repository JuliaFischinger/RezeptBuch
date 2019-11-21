<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezepte extends Model
{
    protected $fillable = [
        'gericht', 'zutaten', 'zubereitung', 'user_id'
    ];
}
