<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class blogController extends Controller
{
    public function blog_page()
    {

    	return view('admin.create-blog');
    }

    public function save_news(Request $request)
    {

      $data= array();
      $data['title']=$request->title;
      $data['body']=$request->body;
      $data['created_at']=date("Y-m-d H:i:s");
      $image=$request->file('featured_image');

              if($image){
            
               $image_name= str_random(20);
               $ext= strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                if($success){

                	$data['featured_image'] = $image_url;
                	     DB::table('blog')->insert($data);
                	     Session::put('message','Blog added successfully');
                	     return Redirect::to('/blog');
                }




        }
        $data['featured_image'] = ' ';

      $blog_info=DB::table('blog')
               ->insert($data);

      return Redirect::to('/blog');
    }



    public function store()
    {

    $imgpath = request()->file('name')->store('uploads', 'public');
    return response()->json_encode(['location' => $imgpath]);
    }


    public function load_page()
    {

    	return view('pages.blog-page');
    }

    public function detail_page($id)
    {
       $blog_details=DB::table('blog')
                    ->where('id',$id)
                    ->first();

        $manage_blog=view('pages.blog-details')
                    ->with('blog_details',$blog_details);
            return view('layout')
                   ->with('pages.blog-details',$manage_blog);

    }


}


 
