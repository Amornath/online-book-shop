@extends('layout')
@section('title', 'Book Details | BoiGhor')
@section('content')


     



      
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row" style="padding-top: 65px;">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="1.jpg"><img src="{{asset($product_by_details->product_image)}}" style="height: 440px; width:400px"    alt=""></a>
		        							  
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{$product_by_details->product_name}}</h1>
        								<div class="product-reviews-summary d-flex">
        									<ul class="rating-summary d-flex">
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
        									</ul>
        								</div>
        								<div class="price-box">
        									<span>PRICE: ${{$product_by_details->product_price}}</span>
        								</div>
										<div class="product__overview">
        									<p>{!! $product_by_details->product_long_description !!} </p>
        								</div>
        								<div class="box-tocart d-flex">
                                            <form action="{{url('/add-to-cart')}}" method="post">
                                            	{{ csrf_field() }}
        									<span>Quantity</span>
        									<input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
        									<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
        									<div class="addtocart__actions">
        										<button class="tocart" type="submit" title="Add to Cart">Add to Cart</button>
        									</div>
											
                                           </form>
        								</div>

                                      

        						<?php
        						 $customer_id=Session::get('customer_id');
                               //  $shipping_id=Session::get('shipping_id');
                                 ?>

                                 <?php if($customer_id !=NULL ) {?>

                                 	<div class="box-tocart d-flex" style="">
                                        	
                                         <form action="{{url('/add-to-wishlist')}}" method="post">
                                            	{{ csrf_field() }}
        									
        									
        									<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
        									<div class="addtocart__actions" style="">


        										<button class="tocart" type="submit" title="Add to Cart">Add Wishlist</button>




        									</div>
											
                                           </form>

                                        </div>

                                <?php }else {?>


                                	<div class="box-tocart d-flex" style="">
                                        	
                                         <form action="{{url('/login-check')}}" method="">
                                            	{{ csrf_field() }}
        									
        									
        									<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
        									<div class="addtocart__actions" style="">
        										<button class="tocart" type="submit" title="Add to Cart"> ADD Wishlist</button>
        									</div>
											
                                           </form>

                                        </div>

                                         <?php }?>






                                <!--

										<div class="product_meta">
											<span class="posted_in">Categories: 
												<a href="#">Adventure</a>, 
												<a href="#">Kids' Music</a>
											</span>
										</div>
									-->	
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>{!! $product_by_details->product_long_description !!}
										</p>
										
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									<div class="review__attribute">
										<h1>Customer Reviews</h1>
										<h2>Hastech</h2>
										<div class="review__ratings__type d-flex">
											<div class="review-ratings">
												<div class="rating-summary d-flex">
													<span>Quality</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>

												<div class="rating-summary d-flex">
													<span>Price</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="rating-summary d-flex">
													<span>value</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
											<div class="review-content">
												<p>Hastech</p>
												<p>Review by Hastech</p>
												<p>Posted on 11/6/2018</p>
											</div>
										</div>
									</div>
									<div class="review-fieldset">
										<h2>You're reviewing:</h2>
										<h3>Chaz Kangeroo Hoodie</h3>
										<div class="review-field-ratings">
											<div class="product-review-table">
												<div class="review-field-rating d-flex">
													<span>Quality</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Price</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Value</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
										</div>
										<div class="review_form_field">
											<div class="input__box">
												<span>Nickname</span>
												<input id="nickname_field" type="text" name="nickname">
											</div>
											<div class="input__box">
												<span>Summary</span>
												<input id="summery_field" type="text" name="summery">
											</div>
											<div class="input__box">
												<span>Review</span>
												<textarea name="review"></textarea>
											</div>
											<div class="review-form-actions">
												<button>Submit Review</button>
											</div>
										</div>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>
						
						
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						     <?php
                              $all_published_category=DB::table('category')
                                                     ->where('publication_status',1)
                                                     ->get();
                         
                            foreach ($all_published_category as $v_category) { ?>
        						<ul>
        							<li><a href="{{URL::to('/product-by-category/'.$v_category->category_id)}}">{{$v_category->category_name}} <span>(3)</span></a></li>
        							
        						</ul>
        					<?php } ?>
        					</aside>
        					
        					
        					
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
	
		
@endsection