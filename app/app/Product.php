<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function comments() {
        return $this->hasMany('App\Comment1', 'product_id', 'id');
    }

    public function reviews() {
        return $this->hasMany('App\Review', 'product_id', 'id');
    }

    public function catalog() {
        return $this->belongsTo('App\Catalog');
    }
}
