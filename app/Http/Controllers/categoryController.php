<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class categoryController extends Controller
{
    public function index()
    {
    	return view('admin.add-category');
    }

    public function save_category(Request $request)
    {

    	      $data= array();
        $data['category_id']=$request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        DB::table('category')->insert($data);
        Session::put('message','Category added');
        return Redirect::to('/add-category');
    }

    public function show_category()
    {
             $all_category_info=DB::table('category')->get();
       $manage_category=view('admin.all-category')
            ->with('all_category_info',$all_category_info);
       return view('admin-layout')
             ->with('admin.all-category',$manage_category);
    }

    public function unactive_category($category_id)
    {
          DB::table('category')
          ->where('category_id',$category_id)
          ->update(['publication_status'=>0]);
          return Redirect::to('/all-category');
    }

    public function active_category($category_id)
    {
           DB::table('category')
          ->where('category_id',$category_id)
          ->update(['publication_status'=>1]);
          return Redirect::to('/all-category');

    }
    

    public function edit_category($category_id)
    {
             $category_info=DB::table('category')
                ->where('category_id',$category_id)
                ->first();



       $manage_category=view('admin.edit-category')
            ->with('category_info',$category_info);
       return view('admin-layout')
             ->with('admin.edit-category',$manage_category);

    }


    public function update_category(Request $request,$category_id)
    {

              $data= array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;

      DB::table('category')
         ->where('category_id',$category_id)
          ->update($data);
      Session::get('message','Category updated successfully');
      return Redirect::to('/all-category');
    }

    public function delete_category($category_id)
    {

           DB::table('category')
           ->where('category_id',$category_id)
           ->delete();
      Session::get('message','Category deleted successfully');
      return Redirect::to('/all-category');
    }

    
}
