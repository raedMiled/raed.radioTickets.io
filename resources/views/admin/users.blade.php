@extends('mainLayout')

@section('content')
<div class="qt-slickslider-container">
<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">


<div class="qt-pageheader qt-content-primary qt-section">
<div class="qt-container">
<h1 class="qt-caption qt-spacer-s">
Users
</h1>
</div>
<div class="qt-header-bg" data-bgimage="/imagestemplate/footer-bg.jpg">
<img src="/imagestemplate/footer-bg.jpg" alt="Featured image" width="1600" height="530">
</div>
</div>
</div>
         

 
  
<div class="qt-container qt-vertical-padding-l">
<div class="row">
  
<div class="col s12 m12 l8">


<div id="booking" class="section qt-section-booking qt-card">
<div class="qt-valign-wrapper">
<div class="qt-valign flow-text">
<div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">                                       
<ul class="tabs">                      
<li class="tab col s4">
<h4  class="comment-reply-title">
Users list
</h4></li>
</ul>
<div  class="row">
<table>
<tbody>

<tr>
<th>user name</th>
<th>user email</th>
<th >account created at</th>
</tr>
@can('approve_request')
@foreach($users as $user)

<tr class="odd">
<td>{{$user -> name}}</td>
<td>{{$user -> email}}</td>
<td>{{$user -> created_at}}</td>
</tr>



</tbody>
@endforeach
@endcan
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