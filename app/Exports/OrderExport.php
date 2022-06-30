<?php

namespace App\Exports;

use App\order;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return order::all();
    }

    public function headings():array
    {
        return [
            'id',
            'Customer_name',
            'Customer_email',
            'Customer_address',
            'Customer_phone',
            'status',
            'user_id',
            'product_id',
            'created_at',
            'updated_at'
        ];
    }
}
