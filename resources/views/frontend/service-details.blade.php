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
                            <li><a href="#">Service</a></li>
                        </ul>
                        <h1 class="h2">Service Detail</h1>
                    </div><!--/. End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- /.End of page title -->

    <!-- our quality -->
    <section class="pt-120 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-container">
                        <div class="row">
                            <div class="col">
                                <!-- qulity bottle nav -->
                                <div class="qulity-bottle-nav nav">
                                    <a class="active" id="nav-tab" data-toggle="tab" href="#nav">bottle set</a>
                                    <a id="nav-tab-1" data-toggle="tab" href="#nav-1">1 Litre</a>
                                    <a class="" id="nav-tab-2" data-toggle="tab" href="#nav-2">2 Litre</a>
                                    <a class="" id="nav-tab-3" data-toggle="tab" href="#nav-3">5 Litre</a>
                                    <a class="" id="nav-tab-4" data-toggle="tab" href="#nav-4">10 Litre</a>
                                    <a class="" id="nav-tab-5" data-toggle="tab" href="#nav-5">20 Litre</a>
                                </div>
                                <!-- End of qulity bottle nav -->
                            </div>
                        </div>
                        <!-- tab content -->
                        <div class="tab-content bottle-tab-content pb-120">
                            <div class="tab-pane fade show active" id="nav" role="tabpanel" aria-labelledby="nav-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$20.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-tab-1">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$20.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.tab pane-->
                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-tab-2">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$40.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.tab pane-->
                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab-3">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$60.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.tab pane-->
                            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-tab-4">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$100.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.tab pane-->
                            <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-tab-5">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- qulity bottle details -->
                                        <div class="quality-bottle-details">
                                            <div class="bottle-image">
                                                <img src="{{ asset('/') }}frontend/assets/img/q-bottle.png" alt="">
                                                <div class="image-sell-offer">
                                                    <h5><span>Free</span> Delivery</h5>

                                                </div>
                                            </div>
                                            <div class="bottle-price">
                                                <ul class="d-flex list-unstyled mb-0">
                                                    <li>Bottle set price</li>
                                                    <li>$220.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.End of qulity bottle details -->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-md-7 col-lg-6 offset-lg-1">
                                        <!-- our quality content -->
                                        <div class="our-quality-inner bottle-detailes">
                                            <h3>Need Water Bottles Set?</h3>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                believable.</p>

                                            <!-- our quality feature -->
                                            <div class="our-quality-feature media">
                                                <div class="our-quality-left">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>1</span>
                                                            Calcium
                                                        </li>
                                                        <li>
                                                            <span>2</span>
                                                            Magnesium
                                                        </li>
                                                        <li>
                                                            <span>3</span>
                                                            Sodium
                                                        </li>
                                                        <li>
                                                            <span>4</span>
                                                            Potassium
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="our-quality-right">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li>
                                                            <span>5</span>
                                                            Chloride
                                                        </li>
                                                        <li>
                                                            <span>6</span>
                                                            Nitrate
                                                        </li>
                                                        <li>
                                                            <span>7</span>
                                                            TDS
                                                        </li>
                                                        <li>
                                                            <span>8</span>
                                                            PH
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- our quality feature -->

                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                                embarrassing
                                                hidden in the middle of text.</p>
                                            <!-- order btn -->
                                            <div class="order-btn">
                                                <a href="#" class="btn">Order Now</a>
                                                <a href="#" class="btn">Store Location</a>
                                            </div><!-- /.End of order btn -->
                                        </div><!-- /.our quality content -->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.tab pane-->
                        </div>
                        <!--/.tab content-->
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!-- /.End of our quality -->

    <!-- our location -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Delivery Service in New York</span>
                        <h2>We’re Almost Everywhere</h2>
                    </div><!-- /.End of section title -->
                </div><!--/.col-->
            </div><!--/.row-->
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
                    </div><!--/.our location wrap-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.End of our location -->

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
                    </div><!--/.End of  partner carosel inner -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!-- /.End of our partner -->

@endsection

@push('js')
@endpush