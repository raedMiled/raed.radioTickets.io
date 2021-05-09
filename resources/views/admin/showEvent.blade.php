@extends('mainLayout')

@section('content')

<div class="qt-part-event-featured qt-card qt-negative qt-vertical-padding-l">
<div class="qt-event-featured-content">
<h1 class="qt-spacer-s">{{$event->name}}</h1><br>
<h3 class="qt-caption qt-spacer-s">Time Remaining Before The Event</h3>
<div class="qt-countdown-container">
<div id="countdown" class="ClassyCountdownDemo qt-countdown" data-end="{{$event->date}} {{$event->time}}"></div>
</div>
</div>
<div class="qt-countdown-background">
<div class="qt-header-bg" data-bgimage="/imagestemplate/large-1170-512/unsplash-28.jpg">
<img src="/imagestemplate/large-1170-512/unsplash-28.jpg" alt="Featured image" width="690" height="302">
</div>
</div>
</div>        




<div class="qt-container qt-vertical-padding-l">
<div class="row">
<div class="col s12 m12 l1 qt-pushpin-container">


<ul class="qt-sharepage qt-content-primary">
<li class="hide-on-med-and-down">
<i class="qticon-share qt-shareicon qt-content-primary-dark"></i>
</li>
<li>
<a class="qt-popupwindow qt-sharelink" data-sharetype="facebook" data-name="Share" data-width="600" data-height="500" target="_blank" href="">
<i class="qticon-facebook"></i>
</a>
</li>
<li>
<a class="qt-popupwindow qt-sharelink" data-sharetype="twitter" data-name="Share" data-width="600" data-height="500" target="_blank" href="">
<i class="qticon-twitter"></i>
</a>
</li>


</ul>


<hr class="qt-spacer-m">
</div>


<div class="col s12 m12 l8">
<div class="qt-the-content">
<a href="/storage/images/{{$event->poster}}" target="_blank">
<img src="/storage/images/{{$event->poster}}" alt="Header image" width="600" height="450" class="qt-img-responsive">
</a>
<table class="table qt-eventtable ">
<tbody>
<tr>
<th>Date:</th>
<td>{{$event->date}}</td>
</tr>
<tr>
<th>Time:</th>
<td>{{$event->time}}</td>
</tr>
<tr>
<th>Address:</th>
<td> {{$event->address}}</td>
</tr>
<tr>
</tbody>
</table>
@can('approve_request')
<div class="qt-content">
<table class="table qt-eventtable ">
                    <tr>             
                        <form method="POST" action="{{route('approve.event', ['event' => $event->id])}}">
                            @csrf
                            
                            
                            <button  type="submit" class=" qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" >Approve event</button>
                            
                            
                        </form>
                        <form method="POST" id="delete-event" action="{{route('delete.event',  ['event' => $event->id])}}">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="qt-btn qt-btn-l qt-btn-secondary qt-spacer-m waves-effect waves-light" onclick="return confirm('Sure Want Delete?')" >delete event</button>
                            </form>
                    </tr>
</table>
                      
</div>
@endcan

</div>
</div>

<div class="qt-sidebar col s12 m12 l3">

<div class="qt-widgets qt-sidebar-main qt-text-secondary row">
<div class="col s12 m3 l12">
<div class="qt-widget">
<h5 class="qt-caption-small"><span>Description</span></h5> {{$event->description}}
<hr class="qt-spacer-s">

</div>
</div>



<div class="col s12 m3 l12">
    <div class="qt-widget">
        <h5 class="qt-caption-small"><span>Newest Events</span></h5>
            <ul class="qt-widget-upcoming">
            @foreach($events as $event1)
                <li class="qt-card-s paper">
                    <h5>
                        <a href="{{route('showClient.event', ['event' => $event1->id])}}">{{$event1 -> name}}</a>
                    </h5>
                    <p>
                        {{$event1 -> date}}
                    </p>
                    <img src="/storage/images/{{$event1 -> poster}}" alt="Show cover" width="200" height="110" class="right">
                </li>
                @endforeach
            </ul>
    </div>
</div>


</div>

</div>
</div>
</div>



@endsection