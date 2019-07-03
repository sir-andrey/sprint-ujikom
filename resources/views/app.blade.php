<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SPRINT SMK | Dashboard</title>

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

        <link rel="stylesheet" href="{{ asset('octopus/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/dropzone/css/basic.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/dropzone/css/dropzone.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/summernote/summernote.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/summernote/summernote-bs3.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/codemirror/lib/codemirror.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/codemirror/theme/monokai.css') }}" />

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

        <section class="body-sign">
                @yield('content')
        </section>

        

        <!-- Vendor -->
        <script src="{{ asset('octopus/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('octopus/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/magnific-popup/magnific-popup.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

        <script src="{{ asset('octopus/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
        <script src="{{ asset('octopus/vendor/select2/select2.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/fuelux/js/spinner.js') }}"></script>
        <script src="{{ asset('octopus/vendor/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/addon/selection/active-line.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/xml/xml.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/css/css.js') }}"></script>
        <script src="{{ asset('octopus/vendor/summernote/summernote.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
        <script src="{{ asset('octopus/vendor/ios7-switch/ios7-switch.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('octopus/javascripts/theme.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ asset('octopus/javascripts/theme.custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('octopus/javascripts/theme.init.js') }}"></script>

        <!-- Example -->
        <script src="{{ asset('octopus/javascripts/forms/examples.advanced.form.js') }}" /></script>
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.default.js') }}"></script>
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.tabletools.js') }}"></script>

        

    </body><img src="http://www.ten28.com/fref.jpg">
</html>