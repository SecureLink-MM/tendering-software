@extends('layouts.frontLayout.front_design')

@section('content')

<main class="page_main_wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item active" aria-current="page">တင်ဒါများ</li>
            </ol>
        </nav>
    </div>
    <section class="articles-wrapper">
        <div class="container">
            <div class="row row-m">
                @include('layouts.frontLayout.front_sidebar')
                <div class="col-sm-8 main-content col-p">
                    <div class="theiaStickySidebar">
                        <!-- START POST CATEGORY STYLE FOUR (Latest articles ) -->
                        <div class="post-inner">
                            <div class="post-head">
                                <div class="row">
                                    <div class="col-md-8">
                                      <h2 class="title"> တင်ဒါများ</h2>
                                    </div>
                                    <div class="col-md-48">
                                       <span class="pull-right">
                                            <div class="toolbar-sorter">
                                                <select class="limiter-options form-control" >
                                                    <option selected="selected" value="Default">ALL</option>
                                                    <option value="New">ပိတ်သိမ်းမည့်နေ့</option>
                                                    <option value="Used">နောက်ဆုံး</option>
                                                </select>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- post body -->
                            <div class="post-body">
                                @foreach($tendersAll as $tender)
                                <div class="news-list-item articles-list">
                                    <div class="post-info-2">
                                        <h4><a href="{{ url('tender/'.$tender->id) }}" class="title"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ $tender->tender_name }}</a></h4>

                                        <a href="{{ url('tender/'.$tender->id) }}"><button class="btn">READ MORE </button></a>
                                        <br>
                                        <!-- <span class="redcolor"> <b> Agency  :</b>  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                        <span class="redcolor"><b> ပိတ်သိမ်းမည့်နေ့  :</b> {{ $tender->end_date }} </span>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- /. post body -->
                            <!--Post footer-->
                            <div class="post-footer">
                                <!-- pagination -->
                                {{ $tendersAll->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
