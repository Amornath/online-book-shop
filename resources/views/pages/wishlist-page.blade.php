@extends('layout')
@section('title', 'Wishlist | BoiGhor')
@section('content')

	        <!-- cart-main-area start -->
        <div class="wishlist-area section-padding--lg bg__white">
            <div class="container">
                <div class="row" style="padding-top: 72px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table wnro__table table-responsive">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name"><span class="nobr">Product Name</span></th>
                                                <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                                <th class="product-add-to-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                      <?php 
                                      $customer_id=Session::get('customer_id');
                                        
                      $variable=DB::table('wishlist')
                  ->join('customer','wishlist.customer_id','=','customer.customer_id')

                  ->join('product','wishlist.product_id','=','product.product_id')
                  ->select('product.*','customer.*','customer.customer_id')
                  //->where('customer_id', $customer_id)
    	          ->get();



                                    ?>
                                     <?php foreach ($variable as $v_product) 
                                     	
                                         { ?>

                                            <tr>
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="{{URL::to($v_product->product_image)}}" alt=""></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{$v_product->product_name}}</a></td>
                                                <td class="product-price"><span class="amount">{{$v_product->product_price}}</span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                            </tr>
                                          <?php } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end --> 




@endsection