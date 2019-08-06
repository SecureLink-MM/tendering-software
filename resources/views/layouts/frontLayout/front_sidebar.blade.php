<div class="col-sm-3 col-p" style="background-color: #edf3f6;">
    <div class="theiaStickySidebar">
        <div class="panel_inner">
            <div class="panel_header">
                <h5 class="wiget-title" style="color:#fff;font-weight: 600;font-size: 19px">Department  </h5>
            </div>
            @foreach($departments as $dep)
                <div class="panel-group" >
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a href="{{ route('tender.department',$dep->slug) }}">{{ $dep->name }}</a>
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- END OF /. TAGS -->
    </div>
</div>
