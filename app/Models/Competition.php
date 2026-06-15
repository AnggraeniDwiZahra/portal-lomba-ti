<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [     
        'user_id',
        'title', 
        'description', 
        'category_id', 
        'level_id', 
        'registration_link', 
        'deadline', 
        'poster'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function savers()
    {
        return $this->belongsToMany(User::class, 'competition_user');
    }
}
