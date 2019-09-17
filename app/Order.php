<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'totalPrice',
    ];

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
