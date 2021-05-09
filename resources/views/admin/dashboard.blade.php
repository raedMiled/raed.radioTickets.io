@extends('mainLayout')

@section('content')


<div class="qt-container qt-vertical-padding-l">
<div class="row">
<div class="col s12 m8 push-m2">             
                
@can('approve_request')

<div class="qt-vertical-padding-l qt-content-primary-dark qt-section">
<div class="qt-container qt-negative">
<h3 class="qt-caption-med"><span>admin dashboard</span></h3>
<ul class="collapsible qt-chart-tracklist qt-spacer-m" data-collapsible="accordion">

<a href="/home/admin/users">
<li class="qt-part-chart qt-chart-track qt-negative qt-card-s">
<div class="qt-chart-table collapsible-header qt-content-primary">
<div class="qt-titles">
<h3 class="qt-ellipsis qt-t">users</h3>
</div>
</div>

</li>
</a>

<a href="/home/admin/events">
<li class="qt-part-chart qt-chart-track qt-negative qt-card-s">
<div class="qt-chart-table collapsible-header qt-content-primary">

<div class="qt-titles">
<h3 class="qt-ellipsis qt-t">events</h3>
</div>
</div>
</li>
</a>

<a href="/home/admin/deals">
<li class="qt-part-chart qt-chart-track qt-negative qt-card-s">
<div class="qt-chart-table collapsible-header qt-content-primary">

<div class="qt-titles">
<h3 class="qt-ellipsis qt-t">deals</h3>
</div>
</div>
</li>
</a>
</ul>

</div>

</div>

@endcan

</div>
</div>
</div>
                           
                            
                      
             







   
   
                      



@endsection



    
        
