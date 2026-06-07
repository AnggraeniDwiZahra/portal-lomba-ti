<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'title',
        'description',
        'poster',
        'registration_link',
        'deadline',
        'user_id',
        'category_id',
        'level_id',
    ];
}
