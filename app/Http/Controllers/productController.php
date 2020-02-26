<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class productController extends Controller
{
    public function add_product()
    {

    	return view('admin.add-product');
    }

    public function save_product(Request $request)
    {

    	$data= array();
        $data['product_id']=$request->product_id;
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['manufacture_id']=$request->manufacture_id;
       
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']=$request->product_price;
       
        $data['publication_status']=$request->publication_status;
        $image=$request->file('product_image');


        if($image){
            
               $image_name= str_random(20);
               $ext= strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                if($success){

                	$data['product_image'] = $image_url;
                	     DB::table('product')->insert($data);
                	     Session::put('message','product added successfully');
                	     return Redirect::to('/add-product');
                }




        }
        $data['product_image'] = ' ';
              DB::table('product')->insert($data);
              Session::put('message','product added successfully');
               return Redirect::to('/add-product');
                
    }

    public function all_product()
    {

    	$all_product_info=DB::table('product')
                  ->join('category','product.category_id','=','category.category_id')

                  ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
    	          ->get();
       



       $manage_product=view('admin.all-product')
            ->with('all_product_info',$all_product_info);
       return view('admin-layout')
             ->with('admin.all-product',$manage_product);

    }


    public function unactive_product($product_id)
    {

        DB::table('product')
          ->where('product_id',$product_id)
          ->update(['publication_status'=>0]);
          return Redirect::to('/all-product');
    }


       public function active_product($product_id)
    {

        DB::table('product')
          ->where('product_id',$product_id)
          ->update(['publication_status'=>1]);
          return Redirect::to('/all-product');
    }

    public function edit_product($product_id)
    {

       $product_info=DB::table('product')
                ->where('product_id',$product_id)
                ->first();



       $manage_product=view('admin.edit-product')
            ->with('product_info',$product_info);
       return view('admin-layout')
             ->with('admin.edit-product',$manage_product);
    }

    public function update_product(Request $request,$product_id)
    {
           $data= array();
        $data['product_name']=$request->product_name;
        $data['product_long_description']=$request->product_long_description;

      DB::table('product')
         ->where('product_id',$product_id)
          ->update($data);
      Session::get('message','Category updated successfully');
      return Redirect::to('/all-product');
    }

    public function delete_product($product_id)
    {
         DB::table('product')
           ->where('product_id',$product_id)
           ->delete();
      Session::get('message','product deleted successfully');
      return Redirect::to('/all-product');
    }






}
