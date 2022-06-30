<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=[
        'id',
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_phone',
        'status',
        'user_id',
        'product_id',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function products(){
        return $this->hasMany(product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
