@extends('layout')
@section('title', 'Home | BoiGhor')
@section('content')


        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
             
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
        <!-- Start BEst Seller Area -->
        <section class="wn__product__area brown--color pt--80  pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">New <span class="color--theme">Books</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                        </div>
                    </div>
                </div>


                <!-- Start Single Tab Content -->
                <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">


                        <?php 
                           $all_new_product=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                          ->where('category_name','NEW')
                           ->get();


                          foreach ($all_new_product as $v_product) { ?>




                    <!-- Start Single Product -->
                    <div class="product product__style--3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product__thumb">
                                <a class="first__img" href="{{URL::to('/view-product/'.$v_product->product_id)}}"><img src="{{asset($v_product->product_image)}}"  style="height: 340px; width:250px"  alt="product image"></a>
                                
                                
                            </div>
                            <div class="product__content content--center">
                                <h4><a href="single-product.html">{{$v_product->product_name}}</a>
                                </h4>
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
                    </div>
                    <!-- Start Single Product -->
                  <?php } ?>
                   
                   
                   
                </div>
                <!-- End Single Tab Content -->
            </div>
        </section>
        <!-- Start BEst Seller Area -->
        <!-- Start NEwsletter Area -->
        <!--
        <section class="wn__newsletter__area bg-image--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                        <div class="section__title text-center">
                            <h2>Stay With Us</h2>
                        </div>
                        <div class="newsletter__block text-center">
                            <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                            <form action="#">
                                <div class="newsletter__box">
                                    <input type="email" placeholder="Enter your e-mail">
                                    <button>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- End NEwsletter Area -->
        <!-- Start Best Seller Area -->

        <section class="wn__bestseller__area bg--white pt--80  pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">All <span class="color--theme">Books</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a>
                        </div>
                    </div>
                </div>

  




                <div class="tab__container mt--60">

                     


                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                             <?php 
                           $all_published_product=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                           ->get();


                          foreach ($all_published_product as $v_product) { ?>

                            <div class="single__product">
                                <!-- Start Single Product -->
                               <div class="col-lg-3 col-md-4 col-sm-6 col-12"> 


                         

                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{URL::to('/view-product/'.$v_product->product_id)}}"><img src="{{asset($v_product->product_image)}}"  style="height: 340px; width:250px"  alt="product image"></a>
                                            
                                            
                                        </div>
                                        <div class="product__content content--center content--center">
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
                                         
                                        </div>
                                    </div>
                               
                              </div> 
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                             
                                <!-- Start Single Product -->
                            </div>
                        
                              <?php } ?>
                          
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
            
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                  
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                   
                    <!-- End Single Tab Content -->

                </div>
                 
            </div>
        </section>
        <!-- Start BEst Seller Area -->
        <!-- Start Recent Post Area -->
        <section class="wn__recent__post bg--gray ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Our <span class="color--theme">Blog</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">

                          <?php 
                  $all_blog=DB::table('blog')
                          ->orderBy('created_at', 'DESC')
                          ->limit(3)
                          ->get();


                      foreach($all_blog as $v_blog ) {   ?>


                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="{{URL::to('/blog-detail/'.$v_blog->id)}}">{{$v_blog->title}} </a></h3>
                                <p>   
                            {{ substr(strip_tags($v_blog->body),0,200) }}
                            {{ strlen(strip_tags($v_blog->body)) > 200 ? "...":"" }}
                                </p>
                                <div class="post__time">
                                    <span class="day">{{$v_blog->created_at}}</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

         <!--
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="blog-details.html">Reading has a signficant info  number of benefits</a></h3>
                                <p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
                                <div class="post__time">
                                    <span class="day">Mar 08, 18</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="blog-details.html">The London Book Fair is to be packed with exciting </a></h3>
                                <p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
                                <div class="post__time">
                                    <span class="day">Nov 11, 18</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                -->    
                </div>
            </div>
        </section>
        <!-- End Recent Post Area -->

          <!-- Best Sale Area -->
        <section class="best-seel-area pt--80 pb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center pb--50">
                            <h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider center" style=";">

                 <?php 
                           $all_new_product=DB::table('product')
                          ->join('category','product.category_id','=','category.category_id')

                          ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                          ->where('category_name','CSTE')
                           ->get();


                          foreach ($all_new_product as $v_product) { ?>

                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset($v_product->product_image)}}" style="width: 170px; height: 250px;" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
            <?php } ?>
                <!-- Single product end -->
                <!-- Single product start -->
               
                <!-- Single product end -->
                <!-- Single product start -->
               
                <!-- Single product end -->
                <!-- Single product start -->
                
                <!-- Single product end -->
                <!-- Single product start -->
              
                <!-- Single product end -->
                <!-- Single product start -->
               
                <!-- Single product end -->
                <!-- Single product start -->
               
                <!-- Single product end -->
                <!-- Single product start -->
                
                <!-- Single product end -->
            </div>
        </section>
        <!-- Best Sale Area Area -->



@endsection