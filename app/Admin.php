<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(order::class);
    }

    public function products(){
        return $this->hasMany(product::class);
    }
}
