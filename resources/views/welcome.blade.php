<!doctype html>
<html class="fixed" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/font-awesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/theme.css') }}" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/skins/default.css') }}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/theme-custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('octopus/vendor/modernizr/modernizr.js') }}"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign body-locked">
            <div class="center-sign">
                <div class="panel panel-sign">
                    <div class="panel-body">
                        <form>
                            <div class="current-user text-center">
                                <img src=" {{ asset('img/smkn2.png') }} " alt="SMK 2" style="background-color: #fff;" class="img-circle user-image" />
                                <h2 class="user-name text-dark m-none">SPRINT SMK</h2>
                                <p class="user-email m-none">Sarana Prasarana Inventory SMK</p>
                            </div>

                            <div class="row">
                                @if (Route::has('login'))
                                    <div class="col-xs-12 text-center">
                                        @auth
                                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <script src="{{ asset('octopus/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('octopus/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/magnific-popup/magnific-popup.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('octopus/javascripts/theme.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ asset('octopus/javascripts/theme.custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('octopus/javascripts/theme.init.js') }}"></script>

    </body>
</html>