@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




<!DOCTYPE html>
<html lang="zxx">   
    <head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/taktika_logo.jpg')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->




        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">











    </head>
    <body class="home-style5">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{asset('assets/images/pre-logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style2">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-6">
                                <ul class="topbar-contact">
                                    <li>
                                        <a href="mailto:support@rstheme.com">📍 7th circle - Silawi complex No. 404</a>
                                    </li>
                                    <li>
                                        <a href="tel:+0885898745">🕘 Sun - Thu: 9:00am–4:00pm.</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <a href="#">📞 +962 (6) 5815821 | +962 797627466</a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-5">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a class="dark-logo" href="/index">
                                            <img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt="">
                                        </a>
                                        <a class="light-logo" href="/index">
                                            <img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt="">
                                        </a>
                                    </div>
                                    <!-- <div class="categories-btn">
                                       <button type="button" class="cat-btn"><i class="fa fa-th"></i>Categories</button>
                                        <div class="cat-menu-inner">
                                            <ul id="cat-menu">
                                            
                                            </ul>
                                        </div>
                                    </div> -->
                                </div> 
                            </div>
                            <div class="col-lg-7 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-80">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                            <ul class="nav-menu">
                                                <li class="menu-item-has-children current-menu-item">
                                                    <a href="/index">Home</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">About</a>
                                                </li>

                                                <!-- <li class="menu-item-has-children">
                                                    <a href="#">Courses</a>
                                                </li> -->

                                                <!-- <li class="menu-item-has-children">
                                                    <a href="#">Pages</a>
                                                </li> -->

                                                @if(Auth::check())

                                                <li class="menu-item-has-children">
                                                    <a href="/orders">My Learning</a>
                                                </li>

                                                 <li class="menu-item-has-children">

                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                 
                                                </li>
                                                
                                                
                                                
                                                @else
                                                
                                                <li class="menu-item-has-children">
                                                    <a href="/register">Register</a>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="/login">Login</a>
                                                </li>

                                                @endif
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner">
                                        <ul>
                                        <li class="icon-bar cart-inner mini-cart-active">
                                                <a class="cart-icon">
                                                    <!-- <span class="cart-count">2</span> -->
                                                    <i class="flaticon-bag">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</i>
                                                    
                                                </a>
                                                <div class="woocommerce-mini-cart text-left">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                        @if(Session::has('cart'))
                                                        @foreach(Session::get('cart')->items as $key => $value)
                                                        
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">{{$value['item']->course_name}}</a><br>
                                                                    <span class="quantity">{{$value['item']->course_price}} JD</span>
                                                                </div>
                                                                <div class="product-image">
                                                                <!-- {{$item=$value['item']}} -->
                                                                    <a href="cart.html"><img src='{{asset("images/courses/$item->course_image")}}' alt="Product Image"></a>
                                                                </div>                       
                                                            </li>
                                                        @endforeach
                                                        @else
                                                            <!-- <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Spirit Level</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="{{asset('assets/images/shop/2.jpg')}}" alt="Product Image"></a>
                                                                </div>
                                                            </li> -->
                                                        @endif
                                                        </ul>
                                                       
                                                        <div class="total-price text-center">
                                                            <span class="subtotal">Subtotal:</span>
                                                            @if(Session::has('cart'))
                                                            <span class="current-price">{{Session::get('cart')->totalPrice}} JD</span>
                                                            @else
                                                            <span class="current-price">0 JD</span>
                                                            @endif
                                                        </div>

                                                        <div class="cart-btn text-center">
                                                            <a class="crt-btn btn1" href="/cart">View Cart</a>
                                                            <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <a id="nav-expander" class="nav-expander style3">
                                            <div class="bar">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/1.jpg')}}"><img src="{{asset('assets/images/gallery/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/2.jpg')}}"><img src="{{asset('assets/images/gallery/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/3.jpg')}}"><img src="{{asset('assets/images/gallery/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/4.jpg')}}"><img src="{{asset('assets/images/gallery/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/5.jpg')}}"><img src="{{asset('assets/images/gallery/5.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/6.jpg')}}"><img src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="{{asset('assets/images/map.jpg')}}" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">


        
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
                <!-- <div class="breadcrumbs-img">
                    <img src="{{asset('assets/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div> -->
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">My Account</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

       <!-- Register Section -->
       <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                        
                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Create New Account</h2>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="styled-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="POST" action="{{ route('register') }}">
                            @csrf

                        

                                <div class="row clearfix">  


                                <div class="form-group row">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Password Confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div> 
                        </div>                                   
                                    
                                    <!-- <div class="form-group col-lg-12 mb-25">
                                        <input type="text" id="fname" name="fname" value="" placeholder="First Name" required>
                                    </div>
                                    
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="lname" name="lname" value="" placeholder="Last Name" required>
                                    </div>
                                    
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" value="" placeholder="Email address " required>
                                    </div>
                                    
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="Username" name="phone_number" value="" placeholder="Username" required>
                                    </div>    
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="Username" name="Password" value="" placeholder="Password" required>
                                    </div>    
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="Username" name="Confirm Password" value="" placeholder="Confirm Password" required>
                                    </div> -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="row clearfix">
                                            
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-1"> 
                                                </div>
                                            </div>
                                            
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-2"> 
                                                </div>
                                            </div>
                                            
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-3"> 
                                                </div>
                                            </div>
                                            
                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <div class="check-box">
                                                    <input type="checkbox" name="remember-password" id="type-4"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn"><span class="txt">Sign Up</span></button>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="{{ route('login') }}">Sign In</a></div>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- End Login Section -->  











            

        
        </div> 
        <!-- Main content End --> 

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <a href="/index"><img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-left">
                                <p> Copyright 2021 © Taktika</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right md-text-left">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->








        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


        <!-- modernizr js -->
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{asset('assets/js/rsmenu-main.js')}}"></script> 
        <!-- op nav js -->
        <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick js -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>        
         <!-- counter top js -->
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!-- video js -->
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>      
        <!-- plugins js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- contact form js -->
        <script src="{{asset('assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
@endsection
