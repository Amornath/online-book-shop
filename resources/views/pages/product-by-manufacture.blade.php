@extends('layout')
@section('title', 'Publication Book | BoiGhor')
@section('content')
              <!--
                 <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content">
                                <div class="contentbox">
                                    <img src="{{asset('front-end/images/bok.jpg')}}" style="height: 400px; width:1600px">
                                  
                                    
                                    <a class="shopbtn" href="{{URL::to('/shop-grid')}}">
                                    shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            -->

       

         <!-- Start Single Slide -->
            <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content">
                                <div class="contentbox">
                                    <h2>Buy <span>your </span></h2>
                                    <h2>favourite <span>Book </span></h2>
                                    <h2>from <span>Here </span></h2>

                                    <a class="shopbtn" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->

            <div>
            	
            </div>
        

                        <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40" style="float:left; padding-top: 72px; padding-left: 61px;: ">
        				<div class="shop__sidebar">

                          

        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>

                                   <?php
                              $all_published_category=DB::table('category')
                                                     ->where('publication_status',1)
                                                     ->get();
                         
                            foreach ($all_published_category as $v_category) { ?>
        						<ul>
        						<li>
        						<a href="{{URL::to('/product-by-category/'.$v_category->category_id)}}">
        							{{$v_category->category_name}} <span>(3)</span></a>
        						</li>
        							
        						</ul>
                               <?php } ?>

        					</aside>

                          

        					
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Publications Tags</h3>
                               <?php
                              $all_published_product=DB::table('manufacture')
                                                     ->where('publication_status',1)
                                                     ->get();
                         
                            foreach ($all_published_product as $v_product) { ?>
        						<ul>
        							<li><a href="{{URL::to('/product-by-manufacture/'.$v_product->manufacture_id)}}">{{$v_product->manufacture_name}}</a></li>
        							
        						</ul>
                            <?php } ?>
        					</aside>
        					
        				</div>
        			</div>
        			
        			<div class="row" style="padding-left:50px; ">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between" style="padding-top: 61px;">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
			                        <p>Showing 1–12 of 40 results</p>
			                        <div class="orderby__wrapper">
			                        	<span>Sort By</span>
			                        	<select class="shot__byselect">
			                        		<option>Default sorting</option>
			                        		<option>HeadPhone</option>
			                        		<option>Furniture</option>
			                        		<option>Jewellery</option>
			                        		<option>Handmade</option>
			                        		<option>Kids</option>
			                        	</select>
			                        </div>
		                        </div>
        					</div>
        				</div>
  



	               
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        				  <?php foreach($product_by_manufacture as $c_product) { ?>
	        		   
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="{{asset($c_product->product_image)}}"  style="height: 340px; width:250px"   alt="product image"></a>
											
											
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">robin parrish</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        				
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        				
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        				
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        				
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					
		        					<!-- End Single Product -->
		        				<?php } ?>
	        					</div>
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul>

	        				</div>
	        				
        				




@endsection