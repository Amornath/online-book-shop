<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{
    public function index()
    {

    	return view('pages.home-content');
    }

    public function showProductByCategory($category_id)
    {
    	              
     $product_by_category=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                          ->where('category.category_id',$category_id)
                          ->where('product.publication_status',1)
                           ->get();
       

         // return view('pages.product-by-category')
                 //->with('layout');

       $manage_product_by_category=view('pages.product-by-category')
            ->with('product_by_category',$product_by_category);
        //  return view('pages.product-by-category')
          //      ->with('pages.product-by-category',$manage_product_by_category);
             return view('layout')
            ->with('pages.product-by-category',$manage_product_by_category);

    }


    public function showProductByManufacture($manufacture_id)
    {

            $product_by_manufacture=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                          ->where('manufacture.manufacture_id',$manufacture_id)
                          ->where('product.publication_status',1)
                           ->get();
       



       $manage_manufacture=view('pages.product-by-manufacture')
            ->with('product_by_manufacture',$product_by_manufacture);
       return view('layout')
             ->with('pages.product-by-manufacture',$manage_manufacture);
    }

    public function productView($product_id)
    {

       $product_by_details=DB::table('product')
                    ->join('category','product.category_id','=','category.category_id')

                    ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                          ->where('product.product_id',$product_id)
                          ->where('product.publication_status',1)
                           ->first();
       



       $manage_product_by_details=view('pages.product-details')
            ->with('product_by_details',$product_by_details);
       return view('layout')
             ->with('pages.product-details',$manage_product_by_details);
    }





}
