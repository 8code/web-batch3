<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable = [
        "id",
        "judul",
        "slug",
        "isi",
        "kategori",
        "img",
        "view",
        "video",
        "user_id",
    ];
}
