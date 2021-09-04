<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
        content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">
    {{-- <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180"> --}}
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('backend/css/plugins.css') }}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
    {{-- <link rel="stylesheet" href="{{asset('backend/css/themes.css')}}"> --}}

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('backend/css/themes.css') }}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('backend/js/vendor/modernizr.min.js') }}"></script>
    @toastr_css

    @stack('css')



</head>

<body>
    <!-- Page Wrapper -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
    <div id="page-wrapper" {{-- class="page-loading" --}}>
        <!-- Preloader -->
        <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->

        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Rewater</strong></h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->


        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-alt-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">

                        <!-- Messages -->
                        <a href="page_ready_inbox.html" class="sidebar-title">
                            <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>
                        </a>
                        <div class="sidebar-section">
                            <div class="alert alert-alt">
                                Debra Stanley<small class="pull-right">just now</small><br>
                                <a href="page_ready_inbox_message.html"><strong>New Follower</strong></a>
                            </div>
                            <div class="alert alert-alt">
                                Sarah Cole<small class="pull-right">2 min ago</small><br>
                                <a href="page_ready_inbox_message.html"><strong>Your subscription was
                                        updated</strong></a>
                            </div>

                        </div>
                        <!-- END Messages -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="/" class="sidebar-brand">
                            <i class="gi gi-flash"></i><span
                                class="sidebar-nav-mini-hide"><strong>Rewater</strong></span>
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        @include('layouts.backend.partial.topbar')
                        <!-- END User Info -->

                        <!-- Theme Colors -->
                        <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->

                        <!-- END Theme Colors -->

                        <!-- Sidebar Navigation -->
                        @include('layouts.backend.partial.sidebar')

                        <!-- END Sidebar Navigation -->



                        <!-- END Sidebar Notifications -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">

                @include('layouts.backend.partial.navbar')
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Datatables Header -->

                    @yield('content')
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->

                    <!-- END Datatables Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                {{-- <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb"
                            target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="https://1.envato.market/x4R" target="_blank">ProUI
                            3.8</a>
                    </div>
                </footer> --}}
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->

    <!-- END User Settings -->

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('backend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>
    @toastr_js
    @toastr_render

    @stack('js')
</body>

</html>
