<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'orderproduct';

    protected $fillable = ['order_id', 'product_id', 'quantity'];

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
