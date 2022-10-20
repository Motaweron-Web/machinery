<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title_it',
        'title_en',
        'subtitle_it',
        'subtitle_en',
        'description_it',
        'description_en',

    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getlocale()];
    }

    public function getSubTitleAttribute()
    {
        return $this->attributes['subtitle_' . app()->getlocale()];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['description_' . app()->getlocale()];
    }

}
