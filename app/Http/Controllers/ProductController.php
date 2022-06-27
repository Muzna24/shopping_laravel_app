<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all products
    public function show(){
        $data['products'] = product::all();
        return view('admin.showProduct')->with($data);
    }
}
