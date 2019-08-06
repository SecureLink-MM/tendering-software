@extends('layouts.frontLayout.front_design')

@section('title')
  {{ $tender->title }}
@endsection

@section('content')

<main class="page_main_wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/') }}">တင်ဒါများ</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $tender->title }} </li>
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
                                <h3 class="title"> {{ $tender->title }} </h3>
                            </div>
                        </div>
                            <div class="post-body">
                                <div class="news-list-item articles-list">
                                    <div class="post-info-2">
                                        <h4> {!! $tender->content !!} </h4>
                                        <span class="redcolor"> <i class="fa fa-building" aria-hidden="true"></i> <b> Department  :</b> {{ $tender->department->name }} </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="redcolor"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b> ပိတ်သိမ်းမည့်နေ့  :</b> {{ $tender->close_date }} </span>
                                        <br><br>
                                        <a href="{{ asset('files/'.$tender->filename) }}" target="_blank"><button class="btn btn_success"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</button></a>
                                        <a href="#"><button class="btn btn_success"><i class="fa fa-shopping-basket" aria-hidden="true"></i> တင်ဒါဝယ်ယူရန်</button></a>
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
