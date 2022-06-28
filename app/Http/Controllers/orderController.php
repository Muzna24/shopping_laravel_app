<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class orderController extends Controller
{
    public function show(){
        $data['orders'] = Order ::all();
       
        
        
         return view('admin.showOrder')->with($data);
    }
    public function edit($id){
        $order = DB::table('orders')->find($id);
        return view('admin.updateorder', ['order'=>$order]);
    }
    public function update(Request $request, $id){
        
        DB::table('orders')->where('id',$id)->update([
            'status'=>$request->ostatus,
            
        ]);
        Alert::success(' Ordere Updated Sucessfully', 'Success');

       
        return back();
    }

    
}
