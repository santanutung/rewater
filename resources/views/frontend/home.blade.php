@extends('layouts.forntend.app')
@section('title','home')

@push('css')

@endpush
@section('content')
 <!-- home banner area -->
    <div class="banner-area-inner">
        <div class="banner-inner-area banner-area1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10">
                        <!-- banner text -->
                        <div class="banner-text-wrap text-center">
                            <span class="schoolbell"  data-animate="fadeInUp" data-delay=".4">Water is nothing, but life</span>
                            <h1  data-animate="fadeInUp" data-delay=".55">Great taste that's fresh <br>& consistent.</h1>
                            <a href="#" class="btn"  data-animate="fadeInUp" data-delay=".7">Order now</a>
                        </div>
                        <!-- End of banner text -->
                        <div class="banner-image"  data-trigger="parallax_layers">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('/') }}frontend/assets/img/banner/bottle.png" alt="" class="bottle">
                                    <div class="figure-caption">
                                        <div class="image-sell-offer">
                                            <h5><span>Free</span> Delivery</h5>
                                        </div>
                                    </div>
                                    <div class="banner-image-wrap">
                                        <img src="{{ asset('/') }}frontend/assets/img/banner/ice.png" alt="" class="ice2" data-depth="0.3">
                                        <img src="{{ asset('/') }}frontend/assets/img/banner/ice.png" alt="" class="ice1" data-depth="0.3">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of home banner area -->

    <!-- feature area -->
    <section class="pt-70 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center type3">
                        <span class="schoolbell">Wellcome To Mineralo</span>
                        <h2>Most Trusted Company</h2>
                        <p>Mineralo Water Industries is pleased to introduce itself as a new entrant in the market for supply of revitalizing, refreshing, pure clean & healthy mineralized water</p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <!-- single feature inner -->
                    <div class="single-feature-inner text-center">
                        <div class="feature-icon"><img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle.svg" class="svg" alt=""></div>
                        <h4>Soft Drinking Water</h4>
                        <p>Sed quia magni eos qui ratione volup tatem.</p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                    </div>
                    <!-- End of single feature inner -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <!-- single feature inner -->
                    <div class="single-feature-inner text-center">
                        <div class="feature-icon"><img src="{{ asset('/') }}frontend/assets/img/icons/glass-of-water.svg" class="svg" alt=""></div>
                        <h4>Cholorine Free Water</h4>
                        <p>Sed quia magni eos qui ratione volup tatem.</p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                    </div>
                    <!-- End of single feature inner -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <!-- single feature inner -->
                    <div class="single-feature-inner text-center">
                        <div class="feature-icon"><img src="{{ asset('/') }}frontend/assets/img/icons/laboratory(1).svg" class="svg" alt=""></div>
                        <h4>Pure Mineralized Water</h4>
                        <p>Sed quia magni eos qui ratione volup tatem.</p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                    </div>
                    <!-- End of single feature inner -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <!-- single feature inner -->
                    <div class="single-feature-inner text-center">
                        <div class="feature-icon"><img src="{{ asset('/') }}frontend/assets/img/icons/laboratory.svg" class="svg" alt=""></div>
                        <h4>Total Home Solution</h4>
                        <p>Sed quia magni eos qui ratione volup tatem.</p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                    </div>
                    <!-- End of single feature inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of feature area -->

    <!-- why bottol water -->
    <section class="pt-120 background-shap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Watch Our Video</span>
                        <h2>Why Bottled Water?</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- why bottle video -->
                    <div class="bottle-video-wrap">
                        <img src='{{ asset('/') }}frontend/assets/img/video-bg.jpg' alt="">
                        <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="video-btn" data-popup="video"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- end of why bottle video -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of why bottol water -->

    <!-- bottole deliver -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Water Bottles</span>
                        <h2>We Deliver Bottles</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/water-gallon.svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>10 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div>
                    <!-- End of single bottle deliver wrap -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/big-bottle-of-water.svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>20 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div>
                    <!-- End of single bottle deliver wrap -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/bottle-of-water.svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>1 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div>
                    <!-- End of single bottle deliver wrap -->
                </div>
                <div class="col-12">
                    <div class="deliver-btn text-center">
                        <a href="service.html" class="btn">View all Bottle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of bottole deliver -->

    <!-- feature area type2-->
    <section>
        <div class="features-inner type2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature1.svg" class="svg" alt="">
                            <h3>Purity to the Max</h3>
                        </div>
                        <!-- End of single featuer inner -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature2.svg" class="svg" alt="">
                            <h3>Health Certificates</h3>
                        </div>
                        <!-- End of single featuer inner -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature3.svg" class="svg" alt="">
                            <h3>Quality Water Standard</h3>
                        </div>
                        <!-- End of single featuer inner -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature4.svg" class="svg" alt="">
                            <h3>Deep Water Filtration</h3>
                        </div>
                        <!-- End of single featuer inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of feature area -->

    <!-- about area -->
    <section class="pt-120 pb-120 primary-bg">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <div class="about-image">
                       <img src="{{ asset('/') }}frontend/assets/img/about-img.png" alt="">
                   </div>
               </div>
               <div class="col-lg-6">
                   <!-- about inner -->
                   <div class="about-wrap">
                       <!-- section title -->
                        <div class="section-title type2">
                            <span class="schoolbell">Shortly About Us</span>
                            <h2>Learn About Mineralo</h2>
                        </div>
                       <!-- End of section title -->
                       <div class="about-area-text">
                           <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you. proident.</p>
                           <div class="about-counter-inner">
                               <div class="row">
                                   <div class="col-12 col-sm-6">
                                       <!-- single counter -->
                                       <div class="single-counter-inner text-center">
                                           <div class="counter-image">
                                               <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle(2).svg" class="svg" alt="">
                                           </div>
                                           <span class="counter">6780</span>
                                           <p>Bottles Delivered</p>
                                       </div>
                                       <!-- End of single counter -->
                                   </div>
                                   <div class="col-12 col-sm-6">
                                       <!-- single counter -->
                                       <div class="single-counter-inner text-center">
                                           <div class="counter-image">
                                               <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle(1).svg" class="svg" alt="">
                                           </div>
                                           <span class="counter">8430</span>
                                           <p>Satisfied Customer</p>
                                       </div>
                                       <!-- End of single counter -->
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- End of about inner -->
               </div>
           </div>
       </div>
    </section>
    <!-- End of about area -->

    <!-- our team -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Water Bottles</span>
                        <h2>Meet Our Team</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- single team member -->
                    <div class="single-team-member text-center">
                        <img src="{{ asset('/') }}frontend/assets/img/team/team1.png" alt="">
                        <div class="member-info">
                            <h4>Kevin Martin</h4>
                            <p>Delivery Boy</p>
                            <!-- team social area -->
                            <ul class="list-unstyled team-social-wrap mb-0">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                            <!-- End of team social area -->
                        </div>
                    </div>
                    <!-- End of single team member -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- single team member -->
                    <div class="single-team-member text-center">
                        <img src="{{ asset('/') }}frontend/assets/img/team/team4.png" alt="">
                        <div class="member-info">
                            <h4>Camila Rose</h4>
                            <p>Officer</p>
                            <!-- team social area -->
                            <ul class="list-unstyled team-social-wrap mb-0">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                            <!-- End of team social area -->
                        </div>
                    </div>
                    <!-- End of single team member -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- single team member -->
                    <div class="single-team-member text-center">
                        <img src="{{ asset('/') }}frontend/assets/img/team/team2.png" alt="">
                        <div class="member-info">
                            <h4>Jessica Brown</h4>
                            <p>Co-Founder</p>
                            <!-- team social area -->
                            <ul class="list-unstyled team-social-wrap mb-0">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                            <!-- End of team social area -->
                        </div>
                    </div>
                    <!-- End of single team member -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- single team member -->
                    <div class="single-team-member text-center">
                        <img src="{{ asset('/') }}frontend/assets/img/team/team3.png" alt="">
                        <div class="member-info">
                            <h4>Mike Hardson</h4>
                            <p>Manager</p>
                            <!-- team social area -->
                            <ul class="list-unstyled team-social-wrap mb-0">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                            <!-- End of team social area -->
                        </div>
                    </div>
                    <!-- End of single team member -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of our team -->

    <!-- subscribe area -->
    <section class="boxed-shadow pt-110 pb-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- subscribe title -->
                    <div class="subscribe-heading">
                        <span class="schoolbell">Our Monthly News</span>
                        <h2>Join Mailing List</h2>
                    </div>
                    <!-- End of subscribe title -->
                </div>
                <div class="col-md-7">
                    <div class="primary-form parsley-validate">
                        <form action="#" method="post">
                            <input type="email" placeholder="Enter your e-mail address" class="theme-input-style" required>
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area -->

    <!-- testimonial area -->
    <section class="pt-120 pb-130 blue-bg2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Our Feebacks</span>
                        <h2 class="text-white">Testimonials</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testionial-carousel-wrap">
                        <div class="owl-carousel testimonial-carousel">
                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author1.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Kevin Martin</h4>
                                        <p>Manager</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author2.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Jessica Brown</h4>
                                        <p>Co Founder</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author3.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Paul Smith</h4>
                                        <p>Officer</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->
                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author1.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Kevin Martin</h4>
                                        <p>Manager</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author2.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Jessica Brown</h4>
                                        <p>Co Founder</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author3.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Paul Smith</h4>
                                        <p>Officer</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->
                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author1.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Kevin Martin</h4>
                                        <p>Manager</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author2.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Jessica Brown</h4>
                                        <p>Co Founder</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial">
                            <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" class='qurt-icon1' alt="">
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author media">
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author3.png" alt="">
                                   <div class="testimonial-author-deg">
                                        <h4>Paul Smith</h4>
                                        <p>Officer</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End of single testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testimonial area -->

    <!-- our location -->
    <section class="pt-120 pb-120 top-shape">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Delivery Service in New York</span>
                        <h2>We’re Almost Everywhere</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="our-location-wrap text-center">
                        <img src="{{ asset('/') }}frontend/assets/img/map.jpg" alt="">
                        <div class="our-location marker1">
                            <div class="our-location-details">
                                <p>666 Road Broklyn Street.</p>
                                <a href="0008888999">000 8888 999</a>
                                <a href="needhelp@mineralo.com">needhelp@mineralo.com</a>
                            </div>
                        </div>
                        <div class="our-location marker2">
                            <div class="our-location-details">
                                <p>666 Road Broklyn Street.</p>
                                <a href="0008888999">000 8888 999</a>
                                <a href="needhelp@mineralo.com">needhelp@mineralo.com</a>
                            </div>
                        </div>
                        <div class="our-location marker3">
                            <div class="our-location-details">
                                <p>666 Road Broklyn Street.</p>
                                <a href="0008888999">000 8888 999</a>
                                <a href="needhelp@mineralo.com">needhelp@mineralo.com</a>
                            </div>
                        </div>
                        <div class="our-location marker4">
                            <div class="our-location-details">
                                <p>666 Road Broklyn Street.</p>
                                <a href="0008888999">000 8888 999</a>
                                <a href="needhelp@mineralo.com">needhelp@mineralo.com</a>
                            </div>
                        </div>
                        <div class="our-location marker5">
                            <div class="our-location-details">
                                <p>666 Road Broklyn Street.</p>
                                <a href="0008888999">000 8888 999</a>
                                <a href="needhelp@mineralo.com">needhelp@mineralo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of our location -->

    <!-- our partner -->
    <section class="pt-120 pb-120 boxed-shadow">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- partner carosel inner -->
                    <div class="partner-carousel-wrap">
                        <div class="partner-carousel owl-carousel">
                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div>
                            <!-- End of single partner -->
                        </div>
                    </div>
                    <!--End of  partner carosel inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of our partner -->

@endsection
@push('js')
@endpush