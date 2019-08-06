<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title')</title>
    <link rel="icon" href="#" sizes="32x32">
    <!-- MM Fonts -->
    <link rel="stylesheet" type="text/css" href="https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu">
    <!-- jquery ui css -->
    <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--Animate css-->
    <link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Navigation css-->
    <link href="{{ asset('frontend/bootsnav/css/bootsnav.css') }}" rel="stylesheet" type="text/css"/>
    <!-- font awesome -->
    <link href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- themify-icons -->
    <link href="{{ asset('frontend/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Important Owl stylesheet -->
    <link href="{{ asset('frontend/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Default Theme -->
    <link href="{{ asset('frontend/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css"/>
    <!-- owl transitions -->
    <link href="{{ asset('frontend/owl-carousel/owl.transitions.css') }}" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- PAGE LOADER -->
<div class="se-pre-con"></div>

<!-- *** START PAGE HEADER SECTION *** -->
@include('layouts.frontLayout.front_header')
<!-- *** START PAGE MAIN CONTENT *** -->

<!-- *** START PAGE MAIN CONTENT *** -->
<main class="page_main_wrapper">
    @yield('content')
</main>
<!-- *** END OF /. PAGE MAIN CONTENT *** -->

@include('layouts.frontLayout.front_footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<!-- jquery ui js -->
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Bootsnav js -->
<script src="{{ asset('frontend/bootsnav/js/bootsnav.js') }}" type="text/javascript"></script>
<!-- theia sticky sidebar -->
<script src="{{ asset('frontend/js/theia-sticky-sidebar.js') }}" type="text/javascript"></script>
<!-- owl include js plugin -->
<script src="{{ asset('frontend/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<!-- custom js -->
<script src="{{ asset('frontend/js/custom.js') }}" type="text/javascript"></script>
</body>
</html>