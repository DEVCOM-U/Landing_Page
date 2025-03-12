<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityPages extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug_judul',
        'content',
        'images',
    ];

}
