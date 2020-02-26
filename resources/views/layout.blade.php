<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title', 'some default title to show if child doesnt set one')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('front-end/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('front-end/images/icon.png')}}">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Stylesheets -->
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/style.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    



    <!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('front-end/css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{asset('front-end/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    

</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <header id="wn__header" class="header__area header__absolute sticky__header " >
            <div class="container-fluid" style="background-color: grey;"  >
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('front-end/images/logo/logo.png')}}" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav" style="text-decoration-color: white;">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="drop"><a href="#">Shop</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">Shop Layout</li>
                                            <li>
                                                <a href="{{URL::to('/shop-grid')}}">Shop Grid</a>
                                            </li>
                                            <li><a href="">Single Product</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Shop Page</li>
                                            <li><a href="my-account.html">My Account</a></li>

                                 <?php $customer_id=Session::get('customer_id') ?>
                                <?php if($customer_id !=NULL) {?>
                                <li><a href="{{URL::to('/customer-logout')}}"> Logout</a></li>

                                <?php }else {?>
                                 <li><a href="{{URL::to('/login-check')}}"> Login</a></li>
                             <?php }?>





                                            <li><a href="{{URL::to('/show-cart')}}">Cart Page</a></li>

                                 <?php $customer_id=Session::get('customer_id');
                                      $shipping_id=Session::get('shipping_id');
                                 ?>
                                <?php if($customer_id !=NULL && $shipping_id==NULL) {?>
                                <li><a href="{{URL::to('/checkout')}}"> Checkout</a></li>
                                <?php }if($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <li><a href="{{URL::to('/payment')}}"> Checkout</a></li>

                                <?php }else {?>
                                <li><a href="{{URL::to('/login-check')}}"> Checkout</a></li>
                                <?php }?>

                                 <?php
                                 $customer_id=Session::get('customer_id');
                               //  $shipping_id=Session::get('shipping_id');
                                 ?>

                                 <?php if($customer_id !=NULL ) {?>
                                           
                                            <li><a href="{{URL::to('/wishlist-page')}}">Wishlist Page</a></li>

                                <?php }else {?>
                                            <li><a href="{{URL::to('/login-check')}}">Wishlist Page</a></li>
                                <?php } ?>
                                            <li><a href="error404.html">404 Page</a></li>
                                           
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Bargain Books</li>
                                            <li><a href="shop-grid.html">Bargain Bestsellers</a></li>
                                            <li><a href="shop-grid.html">Activity Kits</a></li>
                                            
                                            <li><a href="shop-grid.html">Books Under $5</a></li>
                                            <li><a href="shop-grid.html">Bargain Books</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="shop-grid.html">Books</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">Categories</li>
                                                      <?php
                                      $all_published_category=DB::table('category')
                                                            ->where('publication_status',1)
                                                        
                                                            ->limit(5)
                                                            ->get();
                                 
                                    foreach ($all_published_category as $v_category) { ?>
                                            <li><a href="{{URL::to('/product-by-category/'.$v_category->category_id)}}">{{$v_category->category_name}} </a>
                                            </li>
                                            <?php } ?>
                                        </ul>

                                        <ul class="item item03">
                                            <li class="title" >Categories</li>
                                            <?php
                                      $all_published_category=DB::table('category')
                                                            ->where('publication_status',1)
                                                        ->where('category.category_id', '>', 5)
                                                            ->limit(5)
                                                            ->get();
                                 
                                    foreach ($all_published_category as $v_category) { ?>
                                            <li><a href="{{URL::to('/product-by-category/'.$v_category->category_id)}}">{{$v_category->category_name}} </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Collections</li>
                                            <li><a href="shop-grid.html">Science </a></li>
                                            <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                            <li><a href="shop-grid.html">Self-Improvemen</a></li>
                                            <li><a href="shop-grid.html">Home & Garden</a></li>
                                            <li><a href="shop-grid.html">Humor Books</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="shop-grid.html">Kids</a>
                                    <div class="megamenu mega02">
                                        <ul class="item item02">
                                            <li class="title">Top Collections</li>
                                           
                                            <li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
                                            
                                            <li><a href="shop-grid.html">Harry Potter</a></li>
                                            <li><a href="shop-grid.html">Land of Stories</a></li>
                                        </ul>
                                        <ul class="item item02">
                                            <li class="title">More For Kids</li>
                                           
                                            <li><a href="shop-grid.html">B&N Kids' Club</a></li>
                                            
                                            <li><a href="shop-grid.html">Toys & Games</a></li>
                                            <li><a href="shop-grid.html">Hoodies</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="#">Pages</a>
                                    <div class="megamenu dropdown">
                                        <ul class="item item01">
                                            <li><a href="{{URL::to('/about-page')}}">About Page</a></li>
                                            <li class="label2"><a href="portfolio.html">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="{{URL::to('/show-cart')}}">Cart Page</a>
                                            </li>
                                            <li><a href="{{URL::to('/show-cart')}}">Checkout Page</a>
                                            </li>

                                             

                                 <?php
                                 $customer_id=Session::get('customer_id');
                               //  $shipping_id=Session::get('shipping_id');
                                 ?>

                                 <?php if($customer_id !=NULL ) {?>
                                           
                                            <li><a href="{{URL::to('/wishlist-page')}}">Wishlist Page</a></li>

                                <?php }else {?>
                                            <li><a href="{{URL::to('/login-check')}}">Wishlist Page</a></li>
                                <?php } ?>

                                            <li><a href="error404.html">404 Page</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="team.html">Team Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="{{URL::to('/blog-page')}}">Blog</a>
                                    
                                </li>
                                <li><a href="{{URL::to('/contact-page')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                   <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <a class="search__active" href="#"><li class='fas fa-search'  style="padding-right: 20px; font-size:18px;"></li></a>

                          <?php
                                 $customer_id=Session::get('customer_id');
                               //  $shipping_id=Session::get('shipping_id');
                                 ?>

                                 <?php if($customer_id !=NULL ) {?>

                            <a href="{{URL::to('/wishlist-page')}}"><li  class='far fa-heart' style="padding-right: 20px; font-size:18px; "></li></a>

                            <?php }else {?>
                                  <a href="{{URL::to('/login-check')}}"><li  class='far fa-heart' style="padding-right: 20px; font-size:18px; "></li></a>

                             <?php }?>

                            <a class="cartbox_active" href="{{URL::to('/show-cart')}}"><li class="fa fa-shopping-cart"  style="padding-right: 20px; font-size:18px;" ></li></a>
                                <!-- Start Shopping Cart -->
                                <div class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>close</span>
                                        </div>
                                            <?php 

                                        $contents=Cart::content();


                                         foreach ($contents as $v_contents) {?>
                                      

                                        <div class="items-total d-flex justify-content-between">
                                            <span> items</span>
                                        




                                            <span>Cart Subtotal</span>
                                        </div>
                                        <div class="total_amount text-right">
                                            <span>{{$v_contents->total}}</span>
                                        </div>
                                        <div class="mini_action checkout">


                                             <?php $customer_id=Session::get('customer_id');
                                      $shipping_id=Session::get('shipping_id');
                                 ?>
                                <?php if($customer_id !=NULL && $shipping_id==NULL) {?>
                                <li><a  class="checkout__btn" href="{{URL::to('/checkout')}}"> Go to Checkout</a></li>
                                <?php }elseif($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <li><a  class="checkout__btn" href="{{URL::to('/payment')}}"> Go to Checkout</a></li>

                                <?php }else {?>
                                <li><a  class="checkout__btn" href="{{URL::to('/login-check')}}"> Go to Checkout</a></li>
                                <?php }?>


                                            



                                        </div>
                                        <div class="single__items">
                                            <div class="miniproduct">
                                                <div class="item01 d-flex">
                                                    <div class="thumb">
                                                        <a href="product-details.html"><img src="{{$v_contents->options->image}}" alt="product images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h6><a href="product-details.html">{{$v_contents->name}}</a></h6>
                                                        <span class="prize">{{$v_contents->price}}</span>
                                                        <div class="product_prize d-flex justify-content-between">
                                                            <span class="qun">Quantity: {{$v_contents->qty}}</span>
                                                            <ul class="d-flex justify-content-end">
                                                                <li><a href="{{URL::to('/show-cart')}}"><i class="zmdi zmdi-settings"></i></a></li>
                                                                <li><a href="{{URL::to('/delete-cart/'.$v_contents->rowId)}}"><i class="zmdi zmdi-delete"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               
                                            </div>
                                        </div>
                                        <div class="mini_action cart">
                                            <a class="cart__btn" href="{{URL::to('/show-cart')}}">View and edit cart</a>
                                        </div>
                                    <?php } ?>

                                    </div>
                                </div>
                                <!-- End Shopping Cart -->
                            </li>
                            <a class="setting__active" href="#"><li class='far fa-user' style='font-size:18px'></li></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <div class="switcher-currency">
                                            
                                            <strong class="label switcher-label">
                                                <span>Currency</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">USD - US Dollar</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>GBP - British Pound Sterling</li>
                                                        <li>EUR - Euro</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Language</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">English01</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>English02</li>
                                                        <li>English03</li>
                                                        <li>English04</li>
                                                        <li>English05</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Select Store</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">Fashion Store</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>Furniture</li>
                                                        <li>Shoes</li>
                                                        <li>Speaker Store</li>
                                                        <li>Furniture</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>My Account</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <div class="setting__menu">
                                                        <span><a href="#">Compare Product</a></span>
                                                        <span><a href="#">My Account</a></span>
                                                        <span><a href="#">My Wishlist</a></span>
                                                        <span><a href="#">Sign In</a></span>
                                                        <span><a href="#">Create An Account</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="row d-none">
                    <div class="col-lg-12 d-none">
                        <nav class="mobilemenu__nav">
                            <ul class="meninmenu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Page</a></li>
                                        <li><a href="portfolio.html">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="error404.html">404 Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="team.html">Team Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="{{URL::to('/blog-page')}}">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                </div>
                <!-- Mobile Menu -->    
            </div>      
        </header>
        <!-- //Header -->
        <!-- Start Search Popup -->
        <div class="brown--color box-search-content search_active block-bg close__top">
            <form id="search_mini_form" class="minisearch" action="#">
                <div class="field__search">
                    <input type="text" placeholder="Search entire store here...">
                    <div class="action">
                        <a href="#"><i class="zmdi zmdi-search"></i></a>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->


    @yield('content')


        <!-- Best Sale Area -->
        <section class="best-seel-area pt--80 pb--60">
     <!--
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
        -->
            <div class="slider center" style="display:none;">
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/1.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/2.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/3.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/4.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/5.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/6.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/7.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
                <!-- Single product start -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{asset('front-end/images/best-sell-product/8.jpg')}}" alt="product image"></a>
                    </div>
                    <div class="product__content content--center">
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
                <!-- Single product end -->
            </div>
        </section>
        <!-- Best Sale Area Area -->
        <!-- Footer Area -->
        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="{{asset('front-end/images/logo/3.png')}}" alt="logo">
                                    </a>
                                   
                                </div>
                                <div class="footer__content">
                                    <ul class="social__net social__net--2 d-flex justify-content-center">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-google"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                    </ul>
                                    <ul class="mainmenu d-flex justify-content-center">
                                        <li><a href="index.html">Trending</a></li>
                                        <li><a href="index.html">Best Seller</a></li>
                                        <li><a href="index.html">All Product</a></li>
                                        <li><a href="index.html">Wishlist</a></li>
                                        <li><a href="index.html">Blog</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright">
                                <div class="copy__right__inner text-left">
                                    <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment text-right">
                                <img src="{{asset('front-end/images/icons/payment.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal__container" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal__header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="big images" src="{{asset('front-end/images/product/big-img/1.jpg')}}">
                                    </div>
                                </div>
                                <!-- end product images -->
                                <div class="product-info">
                                    <h1>Quick View Model</h1>
                                    <div class="rating__and__review">
                                        <ul class="rating">
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                        <div class="review">
                                            <a href="#">4 customer reviews</a>
                                        </div>
                                    </div>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">$17.20</span>
                                            
                                        </div>
                                    </div>
                                    <div class="quick-desc">
                                        Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                    </div>
                                    
                                    
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this Book</h3>
                                            <ul class="social__net social__net--2 d-flex justify-content-start">
                                                <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                                <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="addtocart-btn">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="{{('front-end/js/vendor/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{('front-end/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
    <script src="{{('front-end/js/popper.min.js')}}"></script>
    <script src="{{('front-end/js/plugins.js')}}"></script>
    <script src="{{('front-end/js/active.js')}}"></script>


    
</body>
</html>