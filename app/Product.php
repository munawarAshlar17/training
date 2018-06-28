<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'shop_id'

    ];

    protected $guarded = ['price'];
}
