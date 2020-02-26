@extends('layout')
@section('title', 'Shop Grid | BoiGhor')
@section('content')

      <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme" style="display: none">
             
           <!-- Start Single Slide -->
            <div class="slide animation__style10 bg-image--1 fullscreen align__center--left" style="max-width: 1400px">
                <div class="container" style="max-width: 1500px">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content">
                                <div class="contentbox" style="padding-top: 20px;">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="{{asset('slider/img/student.jpg')}}" style="height: 450px; width:1600px" class="d-block w-100" alt="...">



                                          <div class="carousel-caption d-none d-md-block">
                                            <h3 style=""><a  href="{{URL::to('/shop-grid')}}">
                                                  SHOP NOW
                                                 </a>                                  
                                            </h3>
                                            
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="{{asset('slider/img/lib.jpg')}}" style="height: 450px; width:1600px" class="d-block w-100" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                             <h3 style=""><a  href="{{URL::to('/shop-grid')}}">
                                                  SHOP NOW
                                                 </a>                                  
                                            </h3>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="{{asset('slider/img/self.jpg')}}" style="height: 450px; width:1600px" class="d-block w-100" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                              <h3 style=""><a  href="{{URL::to('/shop-grid')}}">
                                                  SHOP NOW
                                                 </a>                                  
                                            </h3>
                                          </div>
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                  
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
                       
          
        </div>
        <!-- End Slider area -->

        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row" style="padding-top: 72px;">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar" >

                          

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
        							{{$v_category->category_name}} </a>
        						</li>
        							
        						</ul>
                               <?php } ?>

        					</aside>

                          
                <!--
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">Filter by price</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>Price :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">Filter</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
                 -->
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Publications Tags</h3>
                               <?php
                              $all_published_product=DB::table('manufacture')
                                                     ->where('publication_status',1)
                                                     ->get();
                         
                            foreach ($all_published_product as $v_product) { ?>
        						<ul>
        							<li><a href="{{URL::to('/product-by-manufacture/'.$v_product->manufacture_id)}}">
        								{{$v_product->manufacture_name}}
        							    </a>
        						    </li>
        							
        						</ul>
                            <?php } ?>
        					</aside>
        					
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
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
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">

                             <?php 
                           $all_published_product=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                           ->paginate(9);


                          foreach ($all_published_product as $v_product) { ?>


	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="{{URL::to('/view-product/'.$v_product->product_id)}}"><img src="{{asset($v_product->product_image)}}"  style="height: 340px; width:250px"  alt="product image"></a>
											
											
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">{{$v_product->product_name}}</a></h4>
											<ul class="prize d-flex">
												<li>${{$v_product->product_price}}</li>
												
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														
														<li><a class="wishlist" href="{{URL::to('/view-product/'.$v_product->product_id)}}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="{{URL::to('/view-product/'.$v_product->product_id)}}"><i class="bi bi-heart-beat"></i></a></li>
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
	        					{{ $all_published_product->links() }}
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">

	        		          <?php 
                           $all_product=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                           ->paginate(4);


                          foreach ($all_product as $v_product) { ?>




	        						<!-- Start Single Product -->
	        						<div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="{{asset($v_product->product_image)}}" alt="product images" style="height: 280px;"></a>
	        								
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">{{$v_product->product_name}}</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>${{$v_product->product_price}}</li>
	        									<li class="old__prize"></li>
	        								</ul>
	        								<p>
	        				{{ substr(strip_tags($v_product->product_long_description),0,200) }}
                            {{ strlen(strip_tags($v_product->product_long_description)) > 200 ? "...":"" }}


	        								</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="cart" style="float: right;"><a href="cart.html">Add Wishlist</a></li>
	        									
	        								</ul>

	        							</div>
	        						</div>
                      <br>
	        					<?php } ?>
	        					{{ $all_product->links() }}
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						
	        						<!-- End Single Product -->
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->

        @endsection
		