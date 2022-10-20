<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title_it',
        'title_en',
        'description_it',
        'description_en',
        'machine',
        'address',
        'year',
        'salary'
    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getlocale()];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['description_' . app()->getlocale()];
    }

}
