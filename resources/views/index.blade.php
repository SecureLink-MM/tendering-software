@extends('layouts.frontLayout.front_design')

@section('content')

<main class="page_main_wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ပင်မစာမျက်နှာ</a></li>
                <li class="breadcrumb-item"><a href="#">တင်ဒါများ</a></li>
                <li class="breadcrumb-item active" aria-current="page">လျှပ်စစ်နှင့်စွမ်းအင်ဝန်ကြီးဌာန</li>
            </ol>
        </nav>
    </div>
    <section class="articles-wrapper">
        <div class="container">
            <div class="row row-m">
                <div class="col-sm-4 col-p" style="background-color: #edf3f6;">
                    <div class="theiaStickySidebar">
                        <div class="panel_inner">
                            <div class="panel_header">
                                <h5 class="wiget-title" style="color:#fff;font-weight: 600;font-size: 19px">တင်ဒါများ </h5>
                            </div>
                            @foreach($categories as $cat)
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$cat->id}}" aria-expanded="false" aria-controls="collapseOne">{{ $cat->name }}
                                                <span> </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$cat->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul>
                                                @foreach($cat->categories as $subcat)
                                                  <li>
                                                      <a href="#">{{$subcat->name}}</a>
                                                  </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- END OF /. TAGS -->
                    </div>
                </div>
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
                                        <h4><a href="tender-details.html" class="title"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ $tender->tender_name }}</a></h4>

                                        <a href="tender-details.html"><button class="btn">READ MORE </button></a>
                                        <br>
                                        <span class="redcolor"> <b> Agency  :</b>  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="redcolor"><b> ပိတ်သိမ်းမည့်နေ့  :</b> {{ $tender->end_date }} </span>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- /. post body -->
                            <!--Post footer-->
                            <div class="post-footer">
                                <!-- pagination -->
                                <ul class="pagination">
                                    <li class="disabled"><span class="ti-angle-left"></span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li class="disabled"><span class="extend">...</span></li><li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#"><i class="ti-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
