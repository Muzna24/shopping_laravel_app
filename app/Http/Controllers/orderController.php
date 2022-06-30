<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

use App\Mail\CustomerInformMail;
use App\Mail\orderShippingMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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


    public function addRequest($id){
        $data['users']= User::all();
        return view('customer.order_request', $data);
    }

    public function addOrder(Request $request, $id){
        $product = DB::table('products')->find($id);
        $record = new order();
        $record->customer_name = $request->name;
        $record->customer_email = $request->email;
        $record->customer_address = $request->address;
        $record->customer_phone = $request->phone;
        $record->user_id = Auth::user()->id;
        $record->product_id= $product->id;

        Mail::to($record->customer_email)->send(new orderShippingMail($record));

        $record->save();
        return "order add successfully!";
    }
    public function showorder(){
        $o['orders']= Order::all();
        $p['products']= Product::all();
        $u['users']= User::all();
        $data=$o+$p+$u;


        return view('customer.showorder')->with($data);

    }
}
