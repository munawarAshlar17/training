<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function shop()
    {
        return $this->belongsTo('App\Shop');


    }

    protected $fillable = [
        'name',
        'age',
        'sex',
        'phone_no',
        'email',
        'address',
        'shop_id'
        ];
}
