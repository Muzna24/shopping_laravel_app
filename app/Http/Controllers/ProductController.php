<?php

namespace App\Http\Controllers;

use App\User;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    //show all products
    public function show(){
        $data['products'] = product::all();
        return view('admin.showProduct')->with($data);
    }
    public function  add(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'qantity' => 'required',
            'description' => 'required',
            'product_Image' => 'required|mimes:jpg',
        
        ]);
        $image=$request->product_Image;
        $imageFileName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageFileName);
    
   
        $product = new Product();
        $product->name=$request->product_name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->count=$request->qantity;
        $product->category=$request->category;

        $product->image=$imageFileName;
        $product->admin_id=Auth::User()->id;
        $product->save();
        Alert::success(' Product added Sucessfully', 'Success');

   
        return back();
   
    }
    
    
    public function edit($id){
        $product = DB::table('products')->find($id);
        return view('admin.updateProduct', ['product'=>$product]);
    }

    /**
     * Update the given user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */

    public function update(Request $request, $id){
        
        DB::table('products')->where('id',$id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'count'=>$request->count,
            'category'=>$request->category,
            'image'=>$request->image,
            'admin_id'=>Auth::user()->id
        ]);
        $image=$request->image;
        $imageFileName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageFileName);

        return back();
    }

    public function delete(product $product, $id){
        $product::destroy(array('id', $id));
        return redirect('product/show');
    }

    public function search(){
        $search_text = $_GET['query'];
        $products = product::where('category', 'LIKE','%'.$search_text.'%')->get();

        return view('admin.products_search', compact('products'));
    }

}
