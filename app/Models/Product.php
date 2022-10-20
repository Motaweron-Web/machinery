<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'title_en',
        'title_it',
        'price',
        'discount',
        'desc_en',
        'desc_it',
        'product_type',
        'vendor',
        'tag',
    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getlocale()];
    }

    public function getDescAttribute()
    {
        return $this->attributes['desc_'. app()->getlocale()];
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    } // end of orders
}
