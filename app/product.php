<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
