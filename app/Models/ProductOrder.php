<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;

    protected $table ='product_order';

    protected $guarded = [];

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

}
