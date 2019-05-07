<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment2 extends Model
{
    protected $table = 'comment2';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
