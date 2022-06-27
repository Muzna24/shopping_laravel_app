<?php

namespace App\Http\Controllers;

use App\product;
use App\User;
use Auth;
Use Alert;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all products
    public function show(){
        $data['products'] = product::all();
        return view('admin.showProduct')->with($data);
    }
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
