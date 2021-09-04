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


            <!-- Register Form -->
            <form action="  {{ route('register') }}" method="post" id="form-register"
                class="form-horizontal form-bordered form-control-borderless display-block">
                @csrf
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group @error('name') has-error @enderror">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" id="register-firstname" name="name" class="form-control input-lg"
                                placeholder="Name" required value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="form-group @error('email') has-error @enderror">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="text" id="register-email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" class="form-control input-lg" placeholder="Email">
                            @error('email')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group @error('password') has-error @enderror">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" id="register-password" class="form-control input-lg"
                                placeholder="Password" name="password" required autocomplete="new-password">
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
                            <input type="password" id="register-password-verify" name="password_confirmation" required
                                autocomplete="new-password" class="form-control input-lg" placeholder="Verify Password">
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    {{-- <div class="col-xs-6">
                            <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="register-terms" name="register-terms">
                                <span></span>
                            </label>
                        </div> --}}
                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-sm btn-success">
                            create Account</button>
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

    <!-- Modal Terms -->
    <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Terms &amp; Conditions</h4>
                </div>
                <div class="modal-body">
                    <h4>Title</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h4>Title</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h4>Title</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum
                        lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis
                        ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et
                        facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at
                        lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
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
