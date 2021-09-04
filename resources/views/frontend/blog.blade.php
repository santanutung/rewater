
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
                            <li><a href="#">Blog</a></li>
                        </ul>
                        <h1 class="h2">Blog Posts</h1>
                    </div><!-- End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- /.End of page title -->

    <!-- our blog -->
    <section class="pt-120 pb-90 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog1.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>10</span>Sep</p>
                            </div>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Great taste fresh & consistent</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div><!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog3.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>30</span>Sep</p>
                            </div>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Water delivered to your home</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div><!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog2.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>30</span>Sep</p>
                            </div>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Delicious water always on tap</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div>
                        <!-- End of post content -->
                    </div><!-- End of single blog inner -->
                </div><!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog9.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>20</span>Sep</p>
                            </div>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Great taste fresh & consistent</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div><!--/.End of post content -->
                    </div><!--/.End of single blog inner -->
                </div><!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog8.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>06</span>Sep</p>
                            </div>
                        </div>
                        <!--End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Water delivered to your home</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div><!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('/') }}frontend/assets/img/blog/blog9.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>10</span>Sep</p>
                            </div>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="blog-details.html">Delicious water always on tap</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                                <a href="blog-details.html"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                            </div>
                            <div class="post-info d-flex">
                                <a href="#"><span>By</span>Admin</a>
                                <a href="#"><span>2</span> Comeent</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of our blog -->
@endsection

@push('js')
@endpush