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
                        <h1 class="h2">Blog Detail</h1>
                    </div><!-- /.End of page title content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.End of page title -->

    <!-- blog details -->
    <section class="pt-120 pb-120 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <!-- blog details image -->
                        <div class="blog-details-image">
                            <img src="{{ asset('/') }}frontend/assets/img/blog/blog-details.png" alt="">
                            <div class="post-date">
                                <p><span>30</span>Sep</p>
                            </div>
                        </div><!-- /.blog details image -->

                        <!-- blog details head -->
                        <div class="blog-details-head">
                            <h2>Delicious water always on tap</h2>
                        </div>
                        <div class="post-info d-flex">
                            <a href="#"><span>By</span>Admin</a>
                            <a href="#"><span>2</span> Comeent</a>
                        </div><!-- /.End of blog details head-->

                        <!-- post body -->
                        <div class="blog-details-body">
                            <p>
                                There something changed or is there something not quite working the way you envisaged? Is your van a little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                        </div><!--/.post body -->

                        <!-- post tag and share -->
                        <div class="post-tag-share d-flex align-items-center">
                            <div class="post-tag">
                                <h4>Tags:</h4>
                                <a href="#">Water</a>,
                                <a href="#">Delivery</a>,
                                <a href="#">Filter</a>
                            </div>
                            <div class="post-share">
                                <ul class="social-list mb--0 list-unstyled">
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
                            </div>
                        </div><!-- /.End of post tag and share -->

                        <!-- post author -->
                        <div class="post-author-inner midea">
                            <img src="{{ asset('/') }}frontend/assets/img/blog/post-author.png" alt="">
                            <div class="author-details">
                                <h4>Christine Eve</h4>
                                <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer nullam condimentum purus.</p>
                                <a href="#">View All Posts</a>
                            </div>
                        </div><!-- /.End of post author -->

                        <!-- post comments -->
                        <div class="post-comment">
                            <h3>2 Comments</h3>
                            <ul class="post-comments p-0 m-0 list-unstyled">
                                <li>
                                    <div class="comment-author-details media">
                                        <img src="{{ asset('/') }}frontend/assets/img/blog/comment-author.png" alt="">
                                        <div class="comment-author-content">
                                            <h5>David Martin</h5>
                                            <h6>20 oct, 2018   -   4:00 pm</h6>
                                            <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et aliquet.</p>
                                            <a href="#" class="btn">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="comment-author-details media">
                                        <img src="{{ asset('/') }}frontend/assets/img/blog/comment-author2.png" alt="">
                                        <div class="comment-author-content">
                                            <h5>Jasseca Brown</h5>
                                            <h6>20 oct, 2018   -   4:00 pm</h6>
                                            <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et aliquet.</p>
                                            <a href="#" class="btn">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--/.End of post comments -->

                        <!-- contact form -->
                        <div class="contact-form contact-page-form parsley-validate">
                            <h3>Leave a Comment</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Full Name" class="theme-input-style" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="Email Address" class="theme-input-style" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Write Message" class="theme-input-style"></textarea>
                                        <div class="submite-btn">
                                            <button type="submit" class="btn">Send Message</button>
                                        </div><!-- /.submite btn -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </form><!-- /.form -->
                        </div><!-- /.End of contact form -->
                    </div><!-- /.blog details wrap -->
                </div><!-- /.col -->
                <div class="col-lg-4">
                    <aside>
                        <!-- single sidebar -->
                        <div class="single-sidebar-widget mb-30">
                            <div class="search-form parsley-validate">
                                <form action="#" novalidate>
                                    <input type="text" required placeholder="Search here">
                                </form>
                            </div>
                        </div><!-- /.single sidebar -->

                        <!-- single sidebar -->
                        <div class="single-sidebar-widget mb-30">
                            <div class="sidebar-title">
                                <h4>Latest Posts</h4>
                            </div>
                            <ul class="treading-posts p-0 m-0 list-unstyled">
                                <li class="d-flex">
                                    <img src="{{ asset('/') }}frontend/assets/img/blog/latest.png" alt="">
                                    <div class="latest-poat">
                                        <h6><a href="#">Water delivered to your home</a></h6>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <img src="{{ asset('/') }}frontend/assets/img/blog/latest2.png" alt="">
                                    <div class="latest-poat">
                                        <h6><a href="#">Great taste fresh & consistent</a></h6>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <img src="{{ asset('/') }}frontend/assets/img/blog/latest3.png" alt="">
                                    <div class="latest-poat">
                                        <h6><a href="#">Fresh spring water delivery</a></h6>
                                    </div>
                                </li>
                            </ul><!-- /.ul -->
                        </div><!-- /.single sidebar -->

                        <!-- single sidebar -->
                        <div class="single-sidebar-widget mb-30">
                            <div class="sidebar-title">
                                <h4>Catagories</h4>
                            </div>
                            <ul class="catagory-widget list-unstyled mb-0">
                                <li><a href="#">Water</a></li>
                                <li><a href="#">Pure Mineral</a></li>
                                <li><a href="#">Soft Drinking Water</a></li>
                                <li><a href="#">Filter Water</a></li>
                                <li><a href="#">Spring Water</a></li>
                                <li><a href="#">Water Delivery</a></li>
                            </ul>
                        </div><!--/.single sidebar -->

                        <!-- single sidebar -->
                        <div class="single-sidebar-widget mb-30">
                            <div class="sidebar-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="tag-clouds list-unstyled mb-0">
                                <a href="#">Water</a>,
                                <a href="#">Pure Mineral</a>,
                                <a href="#">Soft Drinking Water</a>,
                                <a href="#">Filter Water</a>,
                                <a href="#">Spring Water</a>,
                                <a href="#">Water Delivery</a>
                            </div>
                        </div><!-- /.single sidebar -->
                    </aside><!-- /.aside -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of blog details -->

@endsection

@push('js')
@endpush