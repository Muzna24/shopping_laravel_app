<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Admin;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function show(){
        $data['orders'] = Order ::all();
       
        
        
         return view('admin.showOrder')->with($data);
    }
}
