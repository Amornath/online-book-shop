<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class otherController extends Controller
{
    public function contact_page()
    {

    	return view('pages.contact-page');
    }

    public function send_msg(Request $request)
    {

    		$data= array();
        
        $data['firstname']=$request->firstname;
        $data['lastname']=$request->lastname;
        $data['email']=$request->email;
       
        $data['website']=$request->website;
        $data['subject']=$request->subject;
       
        $data['message']=$request->message;

          DB::table('message')->insert($data);
              Session::put('message','message send successfully');
               return Redirect::to('/contact-page');
                
    }

    public function wishlist_cart(Request $request)
    {
      $customer_id=Session::get('customer_id');

      $data = array();

      $data['customer_id']=$customer_id;
      $data['product_id']=$request->product_id;

      DB::table('wishlist')->insert($data);
      return Redirect::to('/wishlist-page');

    }


    public function wishlist_page()
    {

        return view('pages.wishlist-page');
    }

    public function about_page()
    {

      return view('pages.about-page');
    }



}
