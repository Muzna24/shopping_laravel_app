<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Mail\CustomerInformMail;
use App\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Product;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class orderController extends Controller
{

    public function show(){
        $data['orders'] = Order ::all();
         return view('admin.showOrder')->with($data);
    }


    public function edit($id){
        $data['orders'] = order ::all();
        return view('admin.updateorder')->with($data);

        // $order = DB::table('orders')->find($id);
        // return view('admin.updateorder', ['order'=>$order]);
    }


    public function update(Request $request, $id){
         $order = new order();
         $order->status = $request->ostatus;
         $order->customer_name = $request->name;
         $order->customer_email = $request->email;

        // $user = new User();
        DB::table('orders')->where('id',$id)->update([
            'status'=>$request->ostatus,
        ]);
        // if ($user->id == $order ->customer_id) {
            Mail::to($order->customer_email)->send(new CustomerInformMail($order));
        // }

        //$order->save();
        
        Alert::success(' Ordere Updated Sucessfully', 'Success');

       
        return back();
    }

    public function showProduct(){
        $data['products'] = product::all();
        return view('customer.showproduct')->with($data);
    }
}
