@extends ('layouts.index_layout')

@section('content')

<!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style1">
                <div class="container">
                    <div class="banner-content text-center">
                        <h3 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Think Different. Think Practical</h3>
                        <div class="desc mb-35 wow wow fadeInRight" data-wow-delay="900ms" data-wow-duration="3000ms"><h2 style="color:white">JOIN <span style="color:#9cc63d"> 100+ </span> CLIENTS THAT TRUST <span style="color:#9cc63d"> Taktika. </span></h2></div>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon banner-style" href="#">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
<!-- Banner Section End -->



<!-- Services Section Start -->
            <div class="rs-services style2 pt-100 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="service-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="content-part" style="height:20em">
                                    <span class="icon-part"><i class="fa fa-hourglass-half"></i></span>
                                    <h4 class="title"><a href="#">Go at your own pace</a></h4>
                                    <p class="desc">Enjoy lifetime access to courses on Taktika's website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="service-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <div class="content-part" style="height:20em">
                                    <span class="icon-part"><i class="flaticon-analysis"></i></span>
                                    <h4 class="title"><a href="#">Learn from industry experts</a></h4>
                                    <p class="desc">Select from top instructors around the world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="service-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <div class="content-part" style="height:20em">
                                    <span class="icon-part"><i class="fa fa-play-circle"></i></span>
                                    <h4 class="title"><a href="#">Find courses on almost any topic</a></h4>
                                    <p class="desc">Build your library for your career and personal growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Services Section End -->





<!-- Categories Section Start -->
<div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40 mt-80">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30 ">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Subject Categories</div>
                                <h2 class="title mb-0">Our Top Categories </h2>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    @foreach($all_categories as $key => $value)
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="/categories/{{$value->id}}">
                                <div class="icon-part">
                                    <img src='{{asset("images/categories/$value->category_image")}}' alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">{{$value->category_name}}</h4>
                                    <span class="courses">{{$value->courses->count()}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
<!-- Categories Section End -->





<!-- Popular Courses Section Start -->
<div id="rs-popular-courses" class="rs-popular-courses style4 pt-110 pb-120 md-pt-70 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-50 md-mb-30">
                        <h2 class="title mb-10">Latest Coaching Courses</h2>
                        <div class="sub-title mb-0">My Providing Courses</div>
                    </div>
                    <div class="row">
                    @foreach($latest_courses as $key => $value)
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src='{{asset("images/courses/$value->course_image")}}' width="450em" height="300em" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">{{$value->course_price}}</span>
                                    <span><a class="categories" href="#">{{$value->category->category_name}}</a></span>
                                    <h3 class="title"><a href="course-single.html">{{$value->course_name}}</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!-- <div class="col-lg-4 col-md-6 mb-30">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="assets/images/courses/style4/2.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">$55.00</span>
                                    <span><a class="categories" href="#">Health & Fitness</a></span>
                                    <h3 class="title"><a href="course-single.html">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="assets/images/courses/style4/3.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">$55.00</span>
                                    <span><a class="categories" href="#">Health & Fitness</a></span>
                                    <h3 class="title"><a href="course-single.html">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="assets/images/courses/style4/4.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">$55.00</span>
                                    <span><a class="categories" href="#">Health & Fitness</a></span>
                                    <h3 class="title"><a href="course-single.html">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-30">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="assets/images/courses/style4/5.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">$55.00</span>
                                    <span><a class="categories" href="#">Health & Fitness</a></span>
                                    <h3 class="title"><a href="course-single.html">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="assets/images/courses/style4/6.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <span class="price">$55.00</span>
                                    <span><a class="categories" href="#">Health & Fitness</a></span>
                                    <h3 class="title"><a href="course-single.html">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                    <div class="bottom-part">
                                        <span class="user"><i class="fa fa-user"></i> 245</span>
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
<!-- Popular Courses Section End -->







<!-- Testiominals Section Start -->
<div class="rs-testimonial style3 style7 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                  <div class="sec-title2 text-center mb-50">
                      <div class="sub-title">Student Reviews</div>
                      <h2 class="title">What Our Students Say</h2>
                  </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>  
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-4">
                                    <div class="user-info">
                                        <h4 class="name">Saiko Najran</h4>
                                        <span class="designation">Student</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Testiominals Section End -->





            


@endsection