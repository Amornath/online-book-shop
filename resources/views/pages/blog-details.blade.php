@extends('layout')
@section('title', 'Blog | BoiGhor')
@section('content')



		<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row" style="padding-top: 80px;">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="{{asset($blog_details->featured_image)}}" alt="blog images" style="height: 400px; width:850px;">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
										<h2>{{$blog_details->title}}</h2>
										<div class="blog-date-categori">
											<ul>
												<li>{{$blog_details->created_at}}</li>
												<li><a href="#" title="Posts by boighor" rel="author">Author</a></li>
											</ul>
										</div>
									</div>
									<div class="post_content">
										<p>{!! $blog_details->body !!}</p>

									</div>
                                  <!--
									<ul class="blog_meta">
										<li><a href="#">3 comments</a></li>
										<li> / </li>
										<li>Tags:<span>fashion</span> <span>t-shirt</span> <span>white</span></li>
									</ul>
                                  -->
								</div>
							</article>
							<div class="comments_area">
								<h3 class="comment__title"> comment</h3>
								<ul class="comment__list">
									<li>
										<div class="wn__comment">
											<div class="thumb">
												<img src="" alt="">
											</div>
											<div class="content">
												<!--
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												-->
											</div>
										</div>
									</li>
									<!--
									<li class="comment_reply">
										<div class="wn__comment">
											<div class="thumb">
												<img src="" alt="">
											</div>
											<div class="content">
                                             
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
                                            
											</div>
										</div>
									</li>
								-->
								</ul>
							</div>
							<div class="comment_respond">
								<h3 class="reply_title">Leave a Reply <small><a href="#">Cancel reply</a></small></h3>
								<form class="comment__form" action="#">
									<p>Your email address will not be published.Required fields are marked </p>
									<div class="input__box">
										<textarea name="comment" placeholder="Your comment here"></textarea>
									</div>
									<div class="input__wrapper clearfix">
										<div class="input__box name one--third">
											<input type="text" placeholder="name">
										</div>
										<div class="input__box email one--third">
											<input type="email" placeholder="email">
										</div>
										<div class="input__box website one--third">
											<input type="text" placeholder="website">
										</div>
									</div>
									<div class="submite__btn">
										<a href="#">Post Comment</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Search</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget recent_widget">
								<h3 class="widget-title">Recent</h3>
								<div class="recent-posts">
									<?php 
									 $blog_details=DB::table('blog')
                                         ->orderBy('created_at', 'DESC')
                                         ->get();
									foreach($blog_details as $v_blog) { ?>
									<ul>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="{{asset($v_blog->featured_image)}}" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="{{URL::to('/blog-detail/'.$v_blog->id)}}">{{$v_blog->title}}</a></h4>
													<p>	{{$v_blog->created_at}}</p>
												</div>
											</div>
										</li>
										
									
										
										
									</ul>
									<?php } ?>
								</div>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							
							<!-- Start Single Widget -->
							<aside class="widget category_widget">
								<h3 class="widget-title">Categories</h3>
								<ul>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Flower</a></li>
									<li><a href="#">Books</a></li>
									<li><a href="#">Jewelle</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget archives_widget">
								<h3 class="widget-title">Archives</h3>
								<ul>
									<li><a href="#">March 2019</a></li>
									<li><a href="#">December 2019</a></li>
									<li><a href="#">November 2019</a></li>
									<li><a href="#">September 2019</a></li>
									<li><a href="#">August 2019</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>







@endsection