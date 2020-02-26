<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;


class adminController extends Controller
{
    public function dashboard()
    {

    	return view('admin.dashboard');
    }

    public function manage_order()
    {
                  $all_order_info=DB::table('order')
                          ->join('customer','order.customer_id','=','customer.customer_id')
                          ->select('order.*','customer.customer_name')
                          
                           ->get();
       



       $manage_order=view('admin.manage-order')
            ->with('all_order_info',$all_order_info);
           return view('admin-layout')
             ->with('admin.manage-order',$manage_order);
    }


    public function view_order($order_id)
    {
         $order_by_id=DB::table('order')
                          ->join('customer','order.customer_id','=','customer.customer_id')
                          ->join('order_detail','order.order_id','=','order_detail.order_id')
                          ->join('shipping','order.shipping_id','=','shipping.shipping_id')
                          
                          ->select('order.*','order_detail.*','shipping.*','customer.*')
                          ->where('order.order_id',$order_id)
                          
                           ->get();
       



       $view_order=view('admin.view-order')
            ->with('order_by_id',$order_by_id);
           return view('admin-layout')
             ->with('admin.view-order',$view_order);

    }

    public function show_msg($id)
    {

        $message=DB::table('message')
                  ->where('id',$id)
                ->first();
       



       $message_view=view('admin.all-message')
            ->with('message',$message);
       return view('admin-layout')
             ->with('admin.all-message',$message_view);

    }




}
