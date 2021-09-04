@extends('layouts.forntend.app')
@section('title','home')

@push('css')

@endpush
@section('content')


    <!-- page title -->
    <div class="page-title-wrap primary-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        <ul class="mb-0 list-unstyle nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                        <h1 class="h2">About Us</h1>
                    </div><!-- /.End of page title content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!--/.End of page title -->

     <!-- our blog -->
    <section class="pt-120 pb-90 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog4.png" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3>Our Mission</h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog5.png" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3>We Deliver</h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                        </div><!--/.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog6.png" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3>The Best</h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!--/.End of single blog inner -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of our blog -->

    <!-- about area -->
    <section class="pt-120 pb-140 primary-bg">
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
                                       </div><!-- /.End of single counter -->
                                   </div>
                                   <div class="col-12 col-sm-6">
                                       <!-- single counter -->
                                       <div class="single-counter-inner text-center">
                                           <div class="counter-image">
                                               <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle(1).svg" class="svg" alt="">
                                           </div>
                                           <span class="counter">8430</span>
                                           <p>Satisfied Customer</p>
                                       </div><!-- /.End of single counter -->
                                   </div><!-- /.col -->
                               </div><!-- /.row -->
                           </div><!-- /.about container -->
                       </div><!-- /.about area text -->
                   </div><!-- /.End of about inner -->
               </div><!-- /.col -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </section> <!--/.End of about area -->

    <!-- our team -->
    <section class="pt-120 pb-90 top-shape">
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
                            </ul><!-- End of team social area -->
                        </div><!-- /.single team member -->
                    </div><!-- /.End of single team member -->
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
                            </ul><!-- /.End of team social area -->
                        </div>
                    </div><!-- /.End of single team member -->
                </div><!-- /.col -->
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
                            </ul><!-- /.End of team social area -->
                        </div>
                    </div><!-- /.End of single team member -->
                </div><!-- /.col -->
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
                            </ul><!--/. End of team social area -->
                        </div>
                    </div><!--/. End of single team member -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of our team -->

    <!-- testimonial area -->
    <section class="pt-120 pb-110 blue-bg2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Our Feedbacks</span>
                        <h2 class="text-white">Testimonials</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testionial-carousel-wrap type2">
                        <div class="testionial-carousel2 owl-carousel">
                           <!-- single testimonial -->
                           <div class="single-testimonial text-center">
                               <div class="testi-quate">
                                   <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" alt="">
                               </div>
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author">
                                   <div class="testimonial-author-deg">
                                        <h4>Kevin Martin</h4>
                                        <p>Manager</p>
                                   </div>
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author4.png" alt="">
                               </div>
                           </div><!-- /.End of single testimonial -->

                           <!-- single testimonial -->
                           <div class="single-testimonial text-center">
                               <div class="testi-quate">
                                   <img src="{{ asset('/') }}frontend/assets/img/qort-icon.png" alt="">
                               </div>
                               <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                               <div class="testimonial-author">
                                   <div class="testimonial-author-deg">
                                        <h4>Kevin Martin</h4>
                                        <p>Manager</p>
                                   </div>
                                   <img src="{{ asset('/') }}frontend/assets/img/team/author4.png" alt="">
                               </div>
                           </div> <!-- /.End of single testimonial -->
                        </div><!-- /.testionial carousel2 -->
                    </div><!-- /.testionial carousel wrap -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of testimonial area -->

    <!-- our partner -->
    <section class="pt-120 pb-120 boxed-shadow top-shape">
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
                    </div><!--/.partner carosel wrap -->
                </div><!--/.col -->
            </div><!--/.row -->
        </div><!--/.container -->
    </section><!-- End of our partner -->

@endsection

@push('js')
@endpush