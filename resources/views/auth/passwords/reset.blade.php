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
            <h1><i class="gi gi-flash"></i> <strong>Rewater</strong><br><small>
                    <strong>{{ __('Reset Password') }}</strong></small></h1>
        </div>
        <!-- END Login Title -->

        <!-- Login Block -->
        <div class="block push-bit">

            <!-- Register Form -->
            <form method="post" id="form-register"
                class="form-horizontal form-bordered form-control-borderless display-block"
                action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group @error('email') has-error @enderror">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="text" id="register-email" name="email" class="form-control input-lg"
                                placeholder="Email">


                            @error('email')

                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group @error('password') has-error @enderror">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" id="register-password" name="password" class="form-control input-lg"
                                placeholder="New Password">
                            @error('password')
                                <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" id="register-password-verify" name="password_confirmation"
                                class="form-control input-lg" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">

                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-sm btn-success">
                            Reset Password</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <small>Do you have an account?</small> <a href="{{ route('login') }}"
                            id="link-register"><small>Login</small></a>
                    </div>
                </div>
            </form>
            <!-- END Register Form -->
        </div>
        <!-- END Login Block -->
    </div>
    <!-- END Login Container -->


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
