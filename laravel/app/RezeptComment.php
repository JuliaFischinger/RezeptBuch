<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RezeptComment extends Model
{
    protected $fillable =['rezept_id', 'comment', 'user_id'];
/*
    public function rezept()
    {
        return $this->belongsTo(Rezepte::class);
    }*/
}
