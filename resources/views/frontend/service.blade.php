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
                            <li><a href="#">service</a></li>
                        </ul>
                        <h1 class="h2">Our Service</h1>
                    </div><!--/.End of page title content -->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </div><!-- End of page title -->

    <!-- bottole deliver -->
    <section class="pt-120 pb-90 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
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
                    </div><!-- /.End of single bottle deliver wrap -->
                </div><!-- /.col-->
                <div class="col-md-6 col-lg-4">
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
                    </div><!--/. End of single bottle deliver wrap -->
                </div><!-- /.col-->
                <div class="col-md-6 col-lg-4">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle.svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>1 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div><!-- End of single bottle deliver wrap -->
                </div><!-- /.col-->
                <div class="col-md-6 col-lg-4">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle(2).svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>Water Bottles Set</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div><!-- /.End of single bottle deliver wrap -->
                </div><!-- /.col-->
                <div class="col-md-6 col-lg-4">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/water-bottle(1).svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>2 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div><!-- /.End of single bottle deliver wrap -->
                </div><!-- /.col-->
                <div class="col-md-6 col-lg-4">
                    <!-- single bottle deliver wrap -->
                    <div class="single-bottle-inner text-center">
                        <div class="bottle-image">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/big-bottle-of-water-with-handle.svg" alt="" class="svg">
                        </div>
                        <div class="single-bottle-text">
                            <h4>5 Litre Gallon</h4>
                            <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                            <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                        </div>
                    </div><!-- /.End of single bottle deliver wrap -->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /.End of bottole deliver -->

    <!-- feature area type2-->
    <section>
        <div class="features-inner type2 pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature1.svg" class="svg" alt="">
                            <h3>Purity to the Max</h3>
                        </div><!-- /.End of single featuer inner -->
                    </div><!-- /.col-->
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature2.svg" class="svg" alt="">
                            <h3>Health Certificates</h3>
                        </div><!-- /.End of single featuer inner -->
                    </div><!-- /.col-->
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature3.svg" class="svg" alt="">
                            <h3>Quality Water Standard</h3>
                        </div><!-- /.End of single featuer inner -->
                    </div><!-- /.col-->
                    <div class="col-md-6 col-lg-3">
                        <!-- single featuer inner -->
                        <div class="single-feature text-center">
                            <img src="{{ asset('/') }}frontend/assets/img/icons/feature4.svg" class="svg" alt="">
                            <h3>Deep Water Filtration</h3>
                        </div><!--/. End of single featuer inner -->
                    </div><!-- /.col-->
                </div><!-- /.row-->
            </div><!-- /.container-->
        </div><!-- /.features inner-->
    </section><!-- End of feature area -->

     <!-- our blog -->
    <section class="pt-120 pb-90">
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
                    </div><!-- End of single blog inner -->
                </div><!-- /.col-->
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
                        </div><!--/. End of post content -->
                    </div><!--/. End of single blog inner -->
                </div><!-- /.col-->
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
                    </div><!-- /.End of single blog inner -->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /.End of our blog -->

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
                            </div><!-- /.End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div><!-- /.End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div><!--/. End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="{{ asset('/') }}frontend/assets/img/partner.png" alt="">
                            </div><!--/. End of single partner -->
                        </div>
                    </div><!--/.End of  partner carosel inner -->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /.End of our partner -->

@endsection

@push('js')
@endpush