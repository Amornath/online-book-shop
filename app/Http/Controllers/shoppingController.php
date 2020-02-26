<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppingController extends Controller
{
   public function shop_grid()
   {
   	return view('pages.shop-grid');
   }
}
