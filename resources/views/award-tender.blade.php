@extends('layouts.frontLayout.front_design')

@section('title', 'Award Tender')

@section('content')

<main class="page_main_wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item active"><a href="#">ဆုရတင်ဒါများ</a></li>

            </ol>
        </nav>
    </div>
    <section class="articles-wrapper">
        <div class="container">
            <div class="row row-m">
                <div class="col-sm-12 main-content col-p">
                    <div class="theiaStickySidebar">
                        <!-- START POST CATEGORY STYLE FOUR (Latest articles ) -->
                        <div class="post-inner">
                            <div class="post-head">
                                <div class="row">
                                    <div class="col-md-8">
                                      <h2 class="title">Award Tender Lists</h2>
                                    </div>

                                </div>
                            </div>
                            <!-- post body -->
                            <div class="post-body">
                                @foreach($awardtenders as $awardtender)
                                  <div class="news-list-item articles-list">
                                    <div class="post-info-2">
                                        <h4><a href="tender-details.html" class="title"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ $awardtender->tender_name }} </a></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td> Public Date </td>
                                                    <td> : </td>
                                                    <td> {{ $awardtender->created_at }} </td>
                                                </tr>

                                                <tr>
                                                    <td> Company Name </td>
                                                    <td> : </td>
                                                    <td> {{ $awardtender->company_name }} </td>
                                                </tr>

                                                <tr>
                                                    <td> Description </td>
                                                    <td>:</td>
                                                    <td> {!! $awardtender->description !!} </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
</main>

@endsection
