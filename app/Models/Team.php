<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name_it',
        'name_en',
        'title_it',
        'title_en',
        'facebook',
        'whatsapp',
        'instagram',

    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getlocale()];
    }

    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getlocale()];
    }

}
