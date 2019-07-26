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
                                      <a href="{{ asset('tenders/'.$subcat->url) }}">{{$subcat->name}}</a>
                                  </li>
                                  <br>
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
