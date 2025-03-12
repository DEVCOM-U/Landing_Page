<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamPages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug_name',
        'divisi',
        'slug_divisi',
        'role',
        'slug_role',
        'images',
    ];
}
