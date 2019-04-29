<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderDetails';
    protected $fillable = [
        'name',
        'price',
        'product_id'
    ];
}
