<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function comments() {
        return $this->hasMany('App\Comment1', 'product_id', 'id');
    }
}
