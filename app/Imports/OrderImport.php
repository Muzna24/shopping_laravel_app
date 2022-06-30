<?php

namespace App\Imports;

use App\orde;
use App\order;
use Maatwebsite\Excel\Concerns\ToModel;

class OrderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new order([
            'id'=> $row[0],
            'customer_name'=> $row[1],
            'customer_email'=> $row[2],
            'customer_address'=> $row[3],
            'customer_phone'=> $row[4],
            'status'=> $row[5],
            'user_id'=> $row[6],
            'product_id'=>$row[7]
        ]);
    }
}
