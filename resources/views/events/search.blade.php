@extends('mainLayout')

@section('content')


<div class="qt-slickslider-container ">
<div class="row">
<div class="qt-slickslider qt-slickslider-multiple qt-text-shadow qt-black-bg" data-slidestoshow="3" data-variablewidth="false" data-arrows="false" data-dots="false" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="true" data-centermodemobile="true" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">
<!--<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">
    -->
    @foreach($eventss as $event1)
        <div class="qt-item">

            <div class="qt-part-archive-item qt-vertical">
                <div class="qt-item-header">
                    <div class="qt-header-top">
                        
                        <div class="evt">
                            <ul class="qt-tags cctg">
                                <li><a  href="/home/event " class="ctg">event</a></li>
                            </ul>                        
                        </div>
                       
                        <div class="qt-feedback">
                                    <p class="edt ">{{ \Carbon\Carbon::parse($event1->date)->format('d M Y')}}</p>
                        </div>
                    </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">
                            <h3 class="qt-title">
                                <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-text-shadow">
                                    {{$event1->name}}
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="qt-header-bottom">
                    <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-plus"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$event1->address}}</p>
                                                </div>
                        <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                    </div>
                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$event1 -> poster}}">
                        <img src="/storage/images/{{$event1 -> poster}}" alt="Featured image" width="690" height="302">
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        @foreach($dealss as $deal1)
        <div class="qt-item">

            <div class="qt-part-archive-item qt-vertical">
                <div class="qt-item-header">
                <div class="qt-header-top">
                                                <ul class="qt-tags">
                                                    <li><a href="/home/deal" class="ctg">deal</a></li>
                                                </ul>
                                                <div class="qt-feedback">
                                                <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-btn qt-btn-primary ">{{$deal1 -> discount}}</a>
                                                </div>
                                            </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">
                            <h3 class="qt-title">
                                <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-text-shadow">
                                    {{$deal1->name}}
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="qt-header-bottom">
                    <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$deal1->address}}</p>
                                                </div>
                                            </div>
                        
                    
                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal1 -> poster}}">
                        <img src="/storage/images/{{$deal1 -> poster}}" alt="Featured image" width="690" height="302">
                    </div>
                </div>
            </div>

        </div>
        @endforeach


</div>
</div>
</div>
 
         

<hr class="qt-spacer-s"> 
                
                

@if(isset($details))                       
<h3 class="qt-caption-med"><span>events</span></h3>
                    
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
                                                                <a href="{{route('showClient.event', ['event' => $event->id])}}" class="qt-text-shadow">{{$event -> name}}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m2">
                                                    <a href="{{route('showClient.event', ['event' => $event->id])}}" class="qt-btn qt-btn-primary bottom right"><i class="dripicons-plus"></i></a>
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

                        <h3 class="qt-caption-med"><span>deals</span></h3>

<div class="qt-container qt-vertical-padding-m qt-archive-events">
    

    @foreach($deals as $deal)
    <div class="qt-part-archive-item qt-item-event qt-negative qt-card-s" >
        <div class="qt-item-header">
            <div class="qt-header-mid qt-vc">
                <div class="qt-vi">
                    <div class="row">
                        <div class="col s12 m2">
                            <h4 class="qt-date ">
                                    <span class="qt-month">
                                        {{$deal -> timeEnd}}
                                    </span>
                                    <span class="day">
                                        {{$deal -> dateEnd}}
                                    </span>
                            </h4>
                        </div>
                        <div class="col s12 m8 qt-titles">
                            <div class="qt-vc">
                                <div class="qt-vi">
                                    <h5 class="qt-spacer-xs">{{$deal->address}}</h5>
                                    <h3 class="qt-spacer-xs qt-ellipsis qt-t qt-title">
                                        <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-text-shadow">{{$deal -> name}}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary top right">{{$deal -> discount}}</a>
                        </div>
                        <div class="col s12 m2">
                            <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary bottom right"><i class="dripicons-plus"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal -> poster}}">
                <img src="/storage/images/{{$deal -> poster}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
    </div>
    @endforeach
</div>        

                        @elseif(isset($message)) 
                            <p class="pht">{{$message}}</p>
                        @endif                        
                           
                            
                      
             


@endsection