<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function products(){
        return $this->hasMany(product::class);
    }
}
