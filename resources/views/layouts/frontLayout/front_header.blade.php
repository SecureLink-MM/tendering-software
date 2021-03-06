<header>
    <!-- START HEADER TOP SECTION -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="top-left-menu">

                    </div>
                </div>
                <div class="hidden-xs col-md-6 col-sm-6 col-lg-6">
                    <div class="header-right-menu">
                        <ul>
                            <li> <a href="#"> LOGIN </a> / <a href="#"> REGISTER </a> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. HEADER TOP SECTION -->
    <!-- START MIDDLE SECTION -->
    <div class="header-mid">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center hidden-xs hidden-md hiddesn-sm" >
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png') }}" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <a href="{{ url('/') }}"> <div class="hidden-md hidden-lg col-xs-12"> <center><img src="assets/images/MOHSLogo.png" class="img-responsive" alt="" width="85px"></center> </div>

                        <a href="{{ url('/') }}">
                            <h3 class="logo_title">
                                ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br>
                                စက်မှုဝန်ကြီးဌာန<br>
                                လျှပ်စစ်နှင့်စွမ်းအင်ဝန်ကြီးဌာန
                            </h3>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. MIDDLE SECTION -->
    <!-- START NAVIGATION -->
    <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i> MENU
                </button>

            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav" data-in="" data-out="">
                    <li class="dropdown active">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/') }}">တင်ဒါများ</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/award-tender') }}">ဆုရတင်ဒါများ</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
    </nav>
</header>
