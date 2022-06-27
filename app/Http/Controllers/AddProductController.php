<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Product;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AddProductController extends Controller
{
    public function  add(Request $request)
    {
    
   
        $product = new Product();
        $product->name=$request->product_name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->count=$request->qantity;
        $product->image=null;
        $product->admin_id=Auth::User()->id;
        $product->save();
        Alert::success(' Product added Sucessfully', 'Success');

   
        return back();
   
    }
}

