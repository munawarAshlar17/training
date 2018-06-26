<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
