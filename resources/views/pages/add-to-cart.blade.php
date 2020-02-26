@extends('layout')
@section('title', 'Cart | BoiGhor')
@section('content')


   

        <!-- cart-main-area start -->

       <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row" style="padding-top: 72px;">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                                       
                            <div class="table-content wnro__table table-responsive">
                            	<?php
                                 $contents=Cart::content();

				                  ?>
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php  foreach ($contents as $v_contents) {?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{$v_contents->options->image}}" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">{{$v_contents->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$v_contents->price}}</span></td>
                                            <td class="product-quantity">
                                         <form action="{{url('/update-cart')}}" method="post">
                                                  {{ csrf_field() }}


                                             <input type="number" value="{{$v_contents->qty}}" name="qty">
                                             <input  type="hidden" name="rowId" value="{{$v_contents->rowId}}" >
                                             <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">

                                        </form>
                                            </td>
                                            <td class="product-subtotal" name="order_total">{{$v_contents->total}}</td>
                                            <td class="product-remove"><a href="{{URL::to('/delete-cart/'.$v_contents->rowId)}}">X</a></td>
                                        </tr>
                                       <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                
                                 <?php $customer_id=Session::get('customer_id');
                                      $shipping_id=Session::get('shipping_id');
                                 ?>
                                <?php if($customer_id !=NULL && $shipping_id==NULL) {?>
                                <li><a  class="btn btn-default check_out" href="{{URL::to('/checkout')}}"> Checkout</a></li>
                                <?php }if($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <li><a  class="btn btn-default check_out" href="{{URL::to('/payment')}}"> Checkout</a></li>

                                <?php }else {?>
                                <li><a  class="btn btn-default check_out" href="{{URL::to('/login-check')}}"> Checkout</a></li>
                                <?php }?>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>tax</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>{{Cart::tax()}}</li>
                                    <li>{{Cart::subtotal()}}</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>{{Cart::total()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->



@endsection