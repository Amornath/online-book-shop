<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;

class checkoutController extends Controller
{
     public function login_check()
    {

    	return view('pages.login');
    }

    public function registration(Request $request)
    {
     $data= array();
     $data['customer_name']=$request->customer_name;
     $data['customer_email']=$request->customer_email;
     $data['password']=md5($request->password);
     $data['customer_mobile']=$request->customer_mobile;

     $customer_id=DB::table('customer')
                ->insertGetId($data);

           Session::put('customer_id',$customer_id);
           Session::put('customer_name',$request->customer_name);
           return Redirect::to('/checkout');
    	
    }

    public function check_out()
    {

    	return view('pages.check-out');
    }

     public function save_shipping(Request $request)
    {

      $data=array();
      $data['email']=$request->email;
      $data['F_name']=$request->F_name;
      $data['L_name']=$request->L_name;
      $data['address']=$request->address;
      
      $data['mobile']=$request->mobile;

      $shipping_id=DB::table('shipping')
          ->insertGetId($data);

          Session::put('shipping_id',$shipping_id);
          return Redirect::to('/payment');
    }

    public function payment()
    {

      return view('pages.payment');
    }

    public function customer_login(Request $request)
    {
      $customer_email=$request->email;
      $password=md5($request->password);

      $result=DB::table('customer')
              ->where('customer_email',$customer_email)
              ->where('password',$password)
              ->first();

              

       if ($result) {
         Session::put('customer_id',$result->customer_id);
          return Redirect::to('/checkout');

       }
       else{

        return Redirect::to('/login-check');
       }
 
    }

    public function customer_logout()
    {

      Session::flush();
      return Redirect::to('/');
    }


    public function order_place(Request $request)
    {
      $payment_gateway=$request->payment_method;

      $pdata=array();
      $pdata['payment_method']=$payment_gateway;
      $pdata['payment_status']='pending';

      $payment_id=DB::table('payment')
                 ->insertGetId($pdata);


      $odata=array();
      $odata['customer_id']=Session::get('customer_id');
      $odata['shipping_id']=Session::get('shipping_id');
      $odata['payment_id']=$payment_id;
      $odata['order_total']=Cart::content('total');
      $odata['order_status']='pending';
      
      $order_id=DB::table('order')
               ->insertGetId($odata);


      $contents=Cart::content();
      $ddata=array();
      foreach ($contents as  $v_content) {
        $ddata['order_id']=$order_id;
        $ddata['product_id']=$v_content->id;
        $ddata['product_name']=$v_content->name;
        $ddata['product_price']=$v_content->price;
        $ddata['product_quantity']=$v_content->qty;

        DB::table('order_detail')
            ->insert($ddata);
        
      }

      if ($payment_gateway=='handcash') {
        Cart::destroy();
        echo "Handcash";
        
      }
      elseif ($payment_gateway=='paypal') {
        echo "Paypal";
      }
      elseif ($payment_gateway=='bikash') {
        echo "Bikash";
      }
      else{
        echo "not selected";
      }


    }






}
