@extends('mainLayout')

@section('content')

<div class="qt-pageheader qt-content-primary qt-section">
<div class="qt-container">
<h1 class="qt-caption qt-spacer-s">
Approve Events
</h1>
</div>
<div class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg">
<img src="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg" alt="Featured image" width="1600" height="530">
</div>
</div>
         

<hr class="qt-spacer-s"> 
                
                

                       
@can('approve_request')
      
                    
                        <div class="qt-container qt-vertical-padding-m qt-archive-events">
                            

                            @foreach($events as $event)
                            <div class="qt-part-archive-item qt-item-event qt-negative qt-card-s" >
                                <div class="qt-item-header">
                                    <div class="qt-header-mid qt-vc">
                                        <div class="qt-vi">
                                            <div class="row">
                                                <div class="col s12 m2">
                                                    <h4 class="qt-date ">
                                                            <span class="qt-month">
                                                                {{$event -> time}}
                                                            </span>
                                                            <span class="day">
                                                                {{$event -> date}}
                                                            </span>
                                                    </h4>
                                                </div>
                                                <div class="col s12 m8 qt-titles">
                                                    <div class="qt-vc">
                                                        <div class="qt-vi">
                                                            <h5 class="qt-spacer-xs">{{$event->address}}</h5>
                                                            <h3 class="qt-spacer-xs qt-ellipsis qt-t qt-title">
                                                                <a href="{{route('showEvent.admin', ['event' => $event->id])}}" class="qt-text-shadow">{{$event -> name}}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m2">
                                                    <a href="{{route('showEvent.admin', ['event' => $event->id])}}" class="qt-btn qt-btn-primary bottom right"><i class="dripicons-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$event -> poster}}">
                                        <img src="/storage/images/{{$event -> poster}}" alt="Featured image" width="690" height="302">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                            
                           
            @endcan                
                      
             


@endsection