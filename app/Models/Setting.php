<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

protected $table ='settings';

protected $fillable = [
        'title_en',
        'title_it',
        'subtitle_it',
        'subtitle_en',
        'phone',
        'phone2',
        'email',
        'address',
        'address_map',
        'facebook',
        'insta',
        'youtube',
        'linkedin',
        'footer_content_it',
        'footer_content_en',
];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getlocale()];
    }

    public function getSubTitleAttribute()
    {
        return $this->attributes['subtitle_' . app()->getlocale()];
    }

    public function getContentAttribute()
    {
        return $this->attributes['footer_content_' . app()->getlocale()];
    }
}
