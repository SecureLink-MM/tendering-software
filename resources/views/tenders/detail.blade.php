@extends('layouts.frontLayout.front_design')

@section('content')

<!-- *** START PAGE MAIN CONTENT *** -->
<main class="page_main_wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/') }}">တင်ဒါများ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $tenderDetails->tender_name }}</li>
            </ol>
        </nav>
    </div>

    <section class="articles-wrapper">
        <div class="container">
            <div class="row row-m">
                <div class="col-sm-12 main-content col-p">
                    <div class="theiaStickySidebar">
                        <div class="post-inner">
                            <div class="post-head">
                                <h3 class="title"> {{ $tenderDetails->tender_name }} </h3>
                                    </div>
                            </div>
                            <div class="post-body">
                                <div class="news-list-item articles-list">
                                    <div class="post-info-2">
                                        <h4><a href="#" class="title">{!! $tenderDetails->tender_description !!}</h4>
                                        <span class="redcolor"><b> ပိတ်သိမ်းမည့်နေ့  :</b> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $tenderDetails->end_date }} </span>
                                        <br><br>
                                        <a href="#"><button class="btn btn_success">တင်ဒါဝယ်ယူရန် </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
