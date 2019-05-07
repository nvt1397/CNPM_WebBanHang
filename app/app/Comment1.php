<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment1 extends Model
{
    protected $table = 'comment1';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function repComment() {
        return $this->hasMany('App\Comment2', 'cmt1_id', 'id');
    }
}
