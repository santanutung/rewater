  <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-img">
            <img src='{{ asset('/') }}frontend/assets/img/preloader.gif' alt="" class="pre-img">
        </div>
    </div>
    <!-- End Of Preloader -->

    <!-- Main header -->
    <header class="header">
        <!-- Start Header Navbar-->
        <div class="main-header">
            <div class="main-menu-wrap">
                <div class="container-fluide">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('/') }}frontend/assets/img/logo.png" data-rjs="2" alt="mineralo">
                                </a>
                            </div>
                            <!-- End of Logo -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6 menu-button">
                            <div class="menu--inner-area clearfix">
                                <div class="menu-wraper">
                                    <nav>
                                        <!-- Header-menu -->
                                        <div class="header-menu dosis">
                                            <ul>
                                                {{-- <li class="active"><a href="#">Home <img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a>
                                                    <ul>
                                                        <li class="active"><a href="index.html">Home v1</a></li>
                                                        <li><a href="index-2.html">Home v2</a></li>
                                                        <li><a href="index-3.html">Home v3</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li><a href="{{route('inedx')}}">Home <img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a></li>
                                                <li><a href="{{route('about')}}">About <img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a></li>
                                                <li><a href="#">Service<img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a>
                                                    <ul>
                                                        <li><a href="{{route('service')}}">Service</a></li>
                                                        <li><a href="{{route('service.details')}}">Service Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Blog <img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a>
                                                    <ul>
                                                        <li><a href="{{route('blog')}}">Blog Layout</a></li>
                                                        <li><a href="{{route('blog.details')}}">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('contact')}}">Contact<img src="{{ asset('/') }}frontend/assets/img/line2.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- End of Header-menu -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="urgent-call text-right">
                                <span><img src="{{ asset('/') }}frontend/assets/img/icons/call.svg" class="svg" alt=""></span><a href="#">666 888 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Navbar-->
    </header>