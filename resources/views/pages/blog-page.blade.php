@extends('layout')
@section('title', 'Blog | BoiGhor')
@section('content')



        <!-- Start Blog Area -->
        <div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
        	<div class="container">
        		<div class="row" style="padding-top: 75px;">
        			<div class="col-lg-9 col-12">
        				<div class="blog-page">
        					<div class="page__header">
        						<h2>Blog Archives</h2>
        					</div>
                       <?php 
                  $all_blog=DB::table('blog')
                          ->orderBy('created_at', 'DESC')
                          ->paginate(3);
                          


                      foreach($all_blog as $v_blog ) {

                        ?>
        					<!-- Start Single Post -->
        					<article class="blog__post d-flex flex-wrap">
        						<div class="thumb">
        							<a href="blog-details.html">
        								<img src="{{asset($v_blog->featured_image)}}" alt="blog images" style="height: 260px;">
        							</a>
        						</div>
        						<div class="content">
        							<h4><a href="{{URL::to('/blog-detail/'.$v_blog->id)}}">{{$v_blog->title}}</a></h4>
        							<ul class="post__meta">
        								<li>Posts by : <a href="#">road theme</a></li>
        								<li class="post_separator">/</li>
        								<li>{{$v_blog->created_at}}</li>
        							</ul>
        							<p>
                   {{ substr(strip_tags($v_blog->body),0,300) }}
                   {{ strlen(strip_tags($v_blog->body)) > 300 ? "...":"" }}

                                    </p>
        							<div class="blog__btn">
        								<a href="{{URL::to('/blog-detail/'.$v_blog->id)}}">read more</a>
        							</div>
        						</div>
        					</article>
        					<!-- End Single Post -->
        					
        				<?php } ?>
        					
        					
        					
        				</div>
                        <br>
                        
                                  {{ $all_blog->links() }}
                        
        				
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
        					
        					<!-- End Single Widget -->
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
        							<li><a href="#">March 2015</a></li>
        							<li><a href="#">December 2014</a></li>
        							<li><a href="#">November 2014</a></li>
        							<li><a href="#">September 2014</a></li>
        							<li><a href="#">August 2014</a></li>
        						</ul>
        					</aside>
        					<!-- End Single Widget -->
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Blog Area -->





@endsection