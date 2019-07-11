<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $fillable = [
        "komentar",
        "img",
        "induk",
        "artikel_id",
        "user_id",
        
    ];
}
