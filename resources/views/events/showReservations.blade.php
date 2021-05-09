@extends('mainLayout')

@section('content')

<div class="qt-slickslider-container">
<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">


<div class="qt-pageheader qt-content-primary qt-section">
<div class="qt-container">
<h1 class="qt-caption qt-spacer-s">
Reservations
</h1>
</div>
<div class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg">
<img src="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg" alt="Featured image" width="1600" height="530">
</div>
</div>
</div>
         

 
  
<div class="qt-container qt-vertical-padding-m">
<div class="row">
  
<div class="col s12 m8 push-m2">


<div id="booking" class="section qt-section-booking qt-card">
<div class="qt-valign-wrapper">
<div class="qt-valign flow-text">
<div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">                                       
<ul class="tabs">                      
<li class="tab col s4">
<h4  class="comment-reply-title">
Reservations list
</h4></li>
</ul>
<div  class="row">
<table>
<tbody>

<tr>
<th>Client</th>
<th >time of the resrvation</th>
<th>date of the resrvation</th>
</tr>
@foreach($reservations as $reservation)
@can('show-event', $event)

<tr class="odd">
<td>{{$reservation -> email}}</td>
<td>{{$reservation -> created_at -> format('H:i:s')}}</td>
<td>{{$reservation -> created_at -> format('d.m.Y')}}</td>
</tr>



</tbody>
@endcan
@endforeach
</table>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>   
                   
                    
                        
                            
                           
                            
                      
             


@endsection