<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class manufactureController extends Controller
{
    public function index()
    {
    	return view('admin.add-manufacture');
    }

    public function save_manufacture(Request $request)
    {

    	    	   $data= array();
        $data['manufacture_id']=$request->manufacture_id;
        $data['manufacture_name']=$request->manufacture_name;
        $data['manufacture_description']=$request->manufacture_description;
        $data['publication_status']=$request->publication_status;

        DB::table('manufacture')->insert($data);
        Session::put('message','Manufacture added');
        return Redirect::to('/add-manufacture');
    }

    public function all_manufacture()
    {

    	$all_manufacture_info=DB::table('manufacture')->get();
       $manage_manufacture=view('admin.all-manufacture')
            ->with('all_manufacture_info',$all_manufacture_info);
       return view('admin-layout')
             ->with('admin.all-manufacture',$manage_manufacture);
    }

    public function unactive_manufacture($manufacture_id)
    {

       	 DB::table('manufacture')
          ->where('manufacture_id',$manufacture_id)
          ->update(['publication_status'=>0]);
          return Redirect::to('/all-manufacture');
    }


        public function active_manufacture($manufacture_id)
    {

       	 DB::table('manufacture')
          ->where('manufacture_id',$manufacture_id)
          ->update(['publication_status'=>1]);
          return Redirect::to('/all-manufacture');
    }

    public function edit_manufacture($manufacture_id)
    {

    	     $manufacture_info=DB::table('manufacture')
                ->where('manufacture_id',$manufacture_id)
                ->first();



       $manage_manufacture=view('admin.edit-manufacture')
            ->with('manufacture_info',$manufacture_info);
       return view('admin-layout')
             ->with('admin.edit-manufacture',$manage_manufacture);
    }


     public function update_manufacture(Request $request,$manufacture_id)
    {

    	 $data= array();
        $data['manufacture_name']=$request->manufacture_name;
        $data['manufacture_description']=$request->manufacture_description;

      DB::table('manufacture')
         ->where('manufacture_id',$manufacture_id)
          ->update($data);
      Session::get('message','manufacture updated successfully');
      return Redirect::to('/all-manufacture');
    }

    public function delete_manufacture($manufacture_id)
    {

    	   DB::table('manufacture')
           ->where('manufacture_id',$manufacture_id)
           ->delete();
      Session::get('message','manufacture deleted successfully');
      return Redirect::to('/all-manufacture');
    }


}
