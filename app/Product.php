<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(\App\Category::class);
    }   
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'product_category',
        'image'
    ];

}
