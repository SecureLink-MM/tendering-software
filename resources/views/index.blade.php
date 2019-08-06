@extends('layouts.frontLayout.front_design')

@section('title', 'Home')

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/') }}">တင်ဒါများ</a></li>

            </ol>
        </nav>
    </div>
    <section class="articles-wrapper">
        <div class="container">
            <div class="row row-m mb-3">
                @include('layouts.frontLayout.front_sidebar')
                <div class="col-sm-9 main-content col-p">
                    <div class="theiaStickySidebar">
                        <!-- START POST CATEGORY STYLE FOUR (Latest articles ) -->
                        <div class="post-inner">
                            <div class="post-head">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="title"> Tender Lists</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- post body -->
                            <div class="post-body">

                                @foreach($tenders as $tender)
                                    <div class="news-list-item articles-list">
                                        <div class="post-info-2">
                                            <h4><a href="{{ route('tender.details',$tender->slug) }}" class="title"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ $tender->title }} </a></h4>

                                            <a href="{{ route('tender.details',$tender->slug) }}"><button class="btn">READ MORE </button></a>
                                            <br>
                                            <span class="redcolor"> <i class="fa fa-building" aria-hidden="true"></i> <b> Department  :</b> {{ $tender->department->name }} </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="redcolor"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b> ပိတ်သိမ်းမည့်နေ့  :</b> {{ $tender->close_date }} </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div> <!-- /. post body -->
                            <!--Post footer-->
                            <div class="post-footer">
                                <!-- pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
