<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>ProUI - Responsive Bootstrap Admin Template</title>

    <meta name="description"
        content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/img/favicon.png">

    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="js/vendor/modernizr.min.js"></script>
</head>

<body>
    <!-- Login Full Background -->
    <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
    <img src="{{ asset('backend') }}/img/placeholders/backgrounds/login_full_bg.jpg" alt="Login Full Background"
        class="full-bg animation-pulseSlow">
    <!-- END Login Full Background -->

    <!-- Login Container -->
    <div id="login-container" class="animation-fadeIn">
        <!-- Login Title -->
        <div class="login-title text-center">
            <h1><i class="gi gi-flash"></i> <strong>Rewater</strong></h1>
        </div>
        <!-- END Login Title -->

        <!-- Login Block -->
        <div class="block push-bit">


            <!-- Reminder Form -->
            <form id="form-reminder" class="form-horizontal form-bordered form-control-borderless " method="POST"
                action="{{ route('password.email') }}">
                @csrf


                <div class="form-group">
                    <div class="col-xs-12">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="input-group @error('email') has-error @enderror">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="text" id="reminder-email" name="email" class="form-control input-lg"
                                placeholder="Email" value="{{ $email ?? old('email') }}">


                            @error('email')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-xs-12 text-right">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset
                            Password</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <small>Did you remember your password?</small> <a href="javascript:void(0)"
                            id="link-reminder"><small>Login</small></a>
                    </div>
                </div>
            </form>
            <!-- END Reminder Form -->

            <!-- Register Form -->

            <!-- END Register Form -->
        </div>
        <!-- END Login Block -->
    </div>
    <!-- END Login Container -->

    <!-- Modal Terms -->

    <!-- END Modal Terms -->

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('backend') }}/js/vendor/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/plugins.js"></script>
    <script src="{{ asset('backend') }}/js/app.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('backend') }}/js/pages/login.js"></script>
    <script>
        $(function() {
            Login.init();
        });
    </script>
</body>

</html>
