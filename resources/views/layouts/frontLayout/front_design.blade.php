<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Sample Tender</title>
        <link rel="icon" href="#" sizes="32x32">
        <!-- MM Fonts -->
        <link rel="stylesheet" type="text/css" href="https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu">
        <!-- jquery ui css -->
        <link href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <!--Animate css-->
        <link href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Navigation css-->
        <link href="{{ asset('frontend/assets/bootsnav/css/bootsnav.css') }}" rel="stylesheet" type="text/css"/>
        <!-- font awesome -->
        <link href="{{ asset('frontend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
         <!-- themify-icons -->
        <link href="{{ asset('frontend/assets/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Important Owl stylesheet -->
        <link href="{{ asset('frontend/assets/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Default Theme -->
        <link href="{{ asset('frontend/assets/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css"/>
        <!-- owl transitions -->
        <link href="{{ asset('frontend/assets/owl-carousel/owl.transitions.css') }}" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- PAGE LOADER -->
        <div class="se-pre-con"></div>
        <!-- *** START PAGE HEADER SECTION *** -->
        @include('layouts.frontLayout.front_header')
        <!-- *** START PAGE MAIN CONTENT *** -->
        @yield('content')
        <!-- *** END OF /. PAGE MAIN CONTENT *** -->
        @include('layouts.frontLayout.front_footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- Bootsnav js -->
        <script src="{{ asset('frontend/assets/bootsnav/js/bootsnav.js') }}" type="text/javascript"></script>
        <!-- theia sticky sidebar -->
        <script src="{{ asset('frontend/assets/js/theia-sticky-sidebar.js') }}" type="text/javascript"></script>
        <!-- owl include js plugin -->
        <script src="{{ asset('frontend/assets/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
        <!-- custom js -->
        <script src="{{ asset('frontend/assets/js/custom.js') }}" type="text/javascript"></script>
    </body>
</html>
