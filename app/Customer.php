<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(order::class);
    }
}
