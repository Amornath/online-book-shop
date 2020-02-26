@extends('layout')
@section('content')

          <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">

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
        </div>

        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
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
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Publications Tags</h3>
                               <?php
                              $all_published_product=DB::table('manufacture')
                                                     ->where('publication_status',1)
                                                     ->get();
                         
                            foreach ($all_published_product as $v_product) { ?>
        						<ul>
        							<li><a href="#">{{$v_product->manufacture_name}}</a></li>
        							
        						</ul>
                            <?php } ?>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
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
        					@yield('h-content')
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->

        @endsection
		