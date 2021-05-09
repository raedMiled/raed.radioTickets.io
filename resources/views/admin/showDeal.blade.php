@extends('mainLayout')

@section('content')

<div class="qt-part-event-featured qt-card qt-negative qt-vertical-padding-l">
<div class="qt-event-featured-content">
<h1 class="qt-spacer-s">{{$deal->name}}</h1><br>
<h3 class="qt-caption qt-spacer-s">Time Remaining Before The deal ends</h3>
<div class="qt-countdown-container">
<div id="countdown" class="ClassyCountdownDemo qt-countdown" data-end="{{$deal->dateEnd}} {{$deal->timeEnd}}"></div>
</div>
</div>
<div class="qt-countdown-background">
<div class="qt-header-bg" data-bgimage="/imagestemplate/large-1170-512/unsplash-20.jpg">
<img src="/imagestemplate/large-1170-512/unsplash-20.jpg" alt="Featured image" width="690" height="302">
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
<a href="/storage/images/{{$deal->poster}}" target="_blank">
<img src="/storage/images/{{$deal->poster}}" alt="Header image" width="600" height="450" class="qt-img-responsive">
</a>
<table class="table qt-eventtable ">
<tbody>
<tr>
<th>Date:</th>
<td>{{$deal->dateEnd}}</td>
</tr>
<tr>
<th>Time:</th>
<td>{{$deal->timeEnd}}</td>
</tr>
<tr>
<th>Address:</th>
<td> {{$deal->address}}</td>
</tr>
<tr>
</tbody>
</table>
@can('approve_request')
<div class="qt-content">
<table class="table qt-eventtable ">
                    <tr>             
                        <form method="POST" action="{{route('approve.deal', ['deal' => $deal->id])}}">
                            @csrf
                            
                            
                            <button  type="submit" class=" qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" >Approve deal</button>
                            
                            
                        </form>
                        <form method="POST" id="delete-deal" action="{{route('delete.deal',  ['deal' => $deal->id])}}">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="qt-btn qt-btn-l qt-btn-secondary qt-spacer-m waves-effect waves-light" onclick="return confirm('Sure Want Delete?')" >delete deal</button>
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
<h5 class="qt-caption-small"><span>Description</span></h5> {{$deal->description}}
<hr class="qt-spacer-s">

</div>
</div>



<div class="col s12 m3 l12">
    <div class="qt-widget">
        <h5 class="qt-caption-small"><span>Newest Deals</span></h5>
            <ul class="qt-widget-upcoming">
            @foreach($deals as $deal1)
                <li class="qt-card-s paper">
                    <h5>
                        <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}">{{$deal1 -> name}}</a>
                    </h5>
                    <p>
                        {{$deal1 -> dateEnd}}
                    </p>
                    <img src="/storage/images/{{$deal1 -> poster}}" alt="Show cover" width="200" height="110" class="right">
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