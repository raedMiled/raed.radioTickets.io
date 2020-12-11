<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title > Radio Tickets</title>
<meta name="description" content="Radio station HTML template">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href='/fonts/dripicons/webfont.css' rel='stylesheet' type='text/css'>
<link href='/fonts/qticons/qticons.css' rel='stylesheet' type='text/css'>

<link href='/components/slick/slick.css' rel='stylesheet' type='text/css'>

<link href='/components/swipebox/src/css/swipebox.min.css' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="/components/countdown/css/jquery.classycountdown.css" />

<link rel="stylesheet" type="text/css" href="/components/soundmanager/templates/qtradio-player/css/flashblock.css" />
<link rel="stylesheet" type="text/css" href="/components/soundmanager/templates/qtradio-player/css/qt-360player-volume.css" />

<link rel="stylesheet" href="/css/qt-main.css">

<link rel="stylesheet" href="/css/qt-typography.css">
    <link rel="shortcut icon" type="image/png" href="/imagestemplate/radio-logo-icon.png">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK196L3Y8Pnjsq4QG6dPohNM4TemTSEZU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('/resources/js/app.js') }}" defer></script>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <script src="/js/jquery.js"></script>
    

  <style>
        
        .pht {
            height: 150px;
            margin-left:100px
        }
        .qt-input-l {
            color: black;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .alert-success {
            color: #1d643b;
            background-color: #d7f3e3;
            border-color: #c7eed8;
        }
        .alert-danger {
            color: #761b18;
            background-color: #f9d6d5;
            border-color: #f7c6c5;
        }
        
        #more  {display:  none;}
        .read-more
        {

            text-decoration: none;
            color: #0000ff;
            font-weight: bold;
            padding: 0;
            border: none;
            background: none;
        }
        .ime
        {
            min-width: 485px;
            min-height: 325.5px;
            max-width: 485px;
            max-height: 325.5px;
            
            object-fit: cover;
            
        }
        .tdta
        {
            width: 500px;
        }
        .imn{
            min-width: 110px;
            min-height: 100%;
            max-width: 110px;
            max-height: 100%;
        }
        .block1{
            margin-top: -47px;
        }
        .block2{
            margin-top: -80px;
            margin-left: 20px;
            min-width: 250px;
            min-height: 200px;
            max-width: 250px;
            max-height: 200px;
            font-size: 1.2em;
            line-height: 150%;
            text-align: justify;
        }
        .block3{
            margin-top: -150px;
            margin-left: 20px;
            min-width: 400px;
            min-height: 200px;
            max-width: 400px;
            max-height: 200px;
            font-size: 1.5em;
            line-height: 150%;
            text-align: justify;
        }
        .block4{
            margin-top: -100px;
        }
        .tdtab{
            min-width: 200px;
            max-width: 200px;
            min-height: 300px;
            max-height: 300px;
        }
        .block5{
            margin-top: 40px;
        }
       
    </style>

</head>

<body data-spy="scroll" data-target=".fixed-top">



<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/home" class="brand-logo qt-logo-text">RADIO  <span>TICKETS</span></a></li>
@can('approve_request')
<li ><a href="/home/admin">Administrator</a>
<ul>
<li><a href="/home/admin/users">Users</a></li>
<li><a href="/home/admin/events">Approve Events</a></li>
<li><a href="/home/admin/deals">Approve Deals</a></li>
</ul>
</li>
@endcan
<li><a href="/home/event">Events</a>
<ul>
<li><a href="/home/events">My Events</a></li>
<li><a href="/home/events/create">Create Event</a></li>
</ul>
</li>
<li><a href="/home/deal">Deals</a>
<ul>
<li><a href="/home/deals">My Deals</a></li>
<li><a href="/home/deals/create">Create Deal</a></li>
</ul>
</li>
</li>


    <li class="right"><a  data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
    <li class="right"><a  class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i> Listen</a></li>
    @guest
           
        @if (Route::has('register'))
            <li class="right"><a href="/register" class="button"> Register Now</a></li>
            <li class="right"><a href="/login" class="button" > Login</a></li> 
        @endif
        @else
            <li class="right">
                <a >{{ Auth::user()->name }}</a>
                <ul>
                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    
                </ul>
            </li>
    @endguest
    
</ul>
<ul class="qt-desktopmenu hide-on-xl-only ">
<li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>
<li><a href="/home" class="brand-logo qt-logo-text">Radio Tickets</a></li>
</ul>

</nav>

<div id="qt-mobile-menu" class="side-nav qt-content-primary">
<ul class=" qt-side-nav">
<li><a href="/home">Home</a></li>
@can('approve_request')
<li class="menu-item-has-children"><a href="/home/admin">Administrator</a>
<ul>
<li><a href="/home/admin/users">Users</a></li>
<li><a href="/home/admin/events">Approve Events</a></li>
<li><a href="/home/admin/deals">Approve Deals</a></li>
</ul>
</li>
@endcan
<li class="menu-item-has-children"><a href="/home/event">Events</a>
<ul>
<li><a href="/home/events">My Events</a></li>
<li><a href="/home/events/create">Create Event</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="/home/deal">Deals</a>
<ul>
<li><a href="/home/deals">My Deals</a></li>
<li><a href="/home/deals/create">Create Deal</a></li>
</ul>
</li>
</ul>
</div>


<ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
<li><a href="#!" data-expandable="#qtsearchbar" class="qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
<li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>
@guest
       
        <li ><a href="/login" class="button" > Login</a></li> 
        @if (Route::has('register'))
            <li ><a href="/register" class="button"> Register Now</a></li>
            
        @endif
        @else
           
                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    
                
    @endguest
</ul>

<div id="qtsearchbar" class="qt-searchbar qt-content-primary qt-expandable">
<div class="qt-expandable-inner">
<form method="POST" action="{{ route('search.event') }}" class="qt-inline-form">
            @csrf
            <div class="row qt-nopadding">
                <div class="col s12 m8 l9">
                    <input placeholder="Search : name, date, categorie, address" value="" id="searchtex" type="text" class="validate qt-input-l" name="q">
                </div>
                <div class="col s12 m3 l2">
                    <button type="submit" value="" class="qt-btn qt-btn-primary qt-btn-l qt-fullwidth">
                        Search
                    </button>
                </div>
                <div class="col s12 m1 l1">
                    <a href="#!" class="qt-btn qt-btn-l qt-btn qt-fullwidth aligncenter" data-expandable="#qtsearchbar"><i class="dripicons-cross"></i></a>
                </div>
            </div>
        </form>
</div>
</div>


<div class="qt-part-event-featured qt-card qt-negative qt-vertical-padding-l">
<div class="qt-event-featured-content">
<h1 class="qt-spacer-s">{{$event->name}}</h1><br>
<h3 class="qt-caption qt-spacer-s">Time Remaining Before The Event</h3>
<div class="qt-countdown-container">
<div id="countdown" class="ClassyCountdownDemo qt-countdown" data-end="{{ \Carbon\Carbon::parse($event->date)->format('d M Y')}}  {{ \Carbon\Carbon::parse($event->time)->format('h:i')}}"></div>
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


        <div class="col s12 m12 l8 block1">
            <div class="qt-the-content">
                <table class="table qt-eventtable ">
                <tbody>
                    <tr> 
                    <td>
                        <a href="/storage/images/{{$event->poster}}" target="_blank">
                            <img src="/storage/images/{{$event->poster}}"  width="500" height="525" class=" ime ">
                        </a>
                    </td>
                    <td>
                        <div class="qt-widget block2" >

                            <h5 class="qt-caption-small "><span>Description</span></h5>
                            
                            <!--{{$event->description}}-->
                                {{substr(strip_tags($event->description),0,100)}}
                                @if (strlen($event->description) > 100)
                                    <span id="dots">...</span>
                                    <span id="more">{{substr($event->description,100)}}</span>
                                    <button onclick="myFunction()" id="myBtn" class="read-more">Read more</button>
                                @endif 
                                

                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>


            </div>
            <div class="qt-the-content">
            <table >
                    <tr>
                        <td>
                            <table class="table qt-eventtable tdta block4">
                                <tbody class="block3">
                                    <tr>
                                        <th>Date:</th>
                                        <td>{{ \Carbon\Carbon::parse($event->date)->format('d M Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Time:</th>
                                        <td> {{ \Carbon\Carbon::parse($event->time)->format('H:i')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td> {{$event->address}}</td>
                                    </tr>
                       
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <div class="qt-content tdtab">
                            @can('show-event', $event)
                                <table >
                                    <tr>       
                                        <td>
                                            <a class="qt-btn qt-btn-l qt-btn-primary  waves-effect waves-light" href="{{route('list.event', ['event' => $event->id])}}">reservation list</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="qt-btn qt-btn-l qt-btn-secondary  waves-effect waves-light" href="{{route('edit.event', ['event' => $event->id])}}">update event</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form method="POST" id="delete-event" action="{{route('delete.event',  ['event' => $event->id])}}">
                                            @csrf
                                            @method('DELETE')
                                                <button  type="submit" class="qt-btn qt-btn-l  qt-btn-secondary  waves-effect waves-light" onclick="return confirm('Sure Want Delete?')" >delete event</button>
                                            </form>

                                            <!-- <button class="qt-btn qt-btn-l  qt-btn-secondary  qt-spacer-m waves-effect waves-light remove-event" data-id="{{ $event->id }}" data-action="{{route('delete.event',  ['event' => $event->id])}}"> Delete Event</button>-->
                                        </td>
                                    </tr>
                                </table> 

                      
                    
                            @endcan
                            @can('show-reservation-button', $event)
                    
                                <form method="POST" action="{{route('reserveClient.event', ['event' => $event->id])}}">
                                @csrf
                                @method('GET')
                                    <button  type="submit" class=" qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" >get resrvation</button>
                            
                                </form>
                    
                            @endcan    
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>




        <div class="qt-sidebar col s12 m12 l3">

            <div class="qt-widgets qt-sidebar-main qt-text-secondary row ">
                <div class="col s12 m3 l12 ">

                    <h5 class="qt-caption-small"><span>Place</span></h5>


                    <div id="map" style="height:300px; width:275px;"></div>
                    <hr class="qt-spacer-s">
                </div>
                


                <div class="col s12 m3 l12 ">
                    <div class="qt-widget ">
                            <h5 class="qt-caption-small block5"><span>Newest Events</span></h5>
                            <ul class="qt-widget-upcoming">
                                @foreach($events as $event1)
                                <li class="qt-card-s paper">
                                    <h5>
                                        <a href="{{route('showClient.event', ['event' => $event1->id])}}">{{$event1 -> name}}</a>
                                    </h5>
                                    <p>
                        
                                        {{ \Carbon\Carbon::parse($event1 -> date)->format('d M Y')}}
                                    </p>
                                    <img src="/storage/images/{{$event1 -> poster}}" alt="Show cover"  class="right imn">
                                </li>
                                @endforeach
                            </ul>
                    </div>
                </div>


    </div>

</div>
</div>
</div>


<div class="qt-footer-bottom qt-content-primary-dark">
    <div class="qt-container">
        <div class="row">
            <div class="col s12 m12 l8">
                RadioTickets Website | Powered By <a href="http://digikod.com/">digikod.com</a> Copyright 2020 All Rights Reserved
                
            </div>
               
        </div>
    </div>
</div>




   
   
                      

<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
<a class="qt-btn qt-btn button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

<div id="qtplayercontainer" data-playervolume="true" data-accentcolor="#dd0e34" data-accentcolordark="#ff0442" data-textcolor="#ffffff" data-soundmanagerurl="./components/soundmanager/swf/" class="qt-playercontainer qt-playervolume qt-clearfix qt-content-primary">
<div class="qt-playercontainer-content qt-vertical-padding-m">
<div class="qt-playercontainer-header">
<h5 class="qt-text-shadow small">Now on</h5>
<h3 id="qtradiotitle" class="qt-text-shadow">STATION 1 RADIO</h3>

</div>
<div class="qt-playercontainer-musicplayer" id="qtmusicplayer">
<div class="qt-musicplayer">
<div class="ui360 ui360-vis qt-ui360">
<a id="playerlink" href="http://freshly-ground.com/data/audio/sm2/Adrian Glynn - Blue Belle Lament.mp3"></a>
</div>
</div>
</div>

</div>
<div id="playerimage" class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-44.jpg">
<img src="/imagestemplate/full-1600-700/unsplash-44.jpg" alt="Featured image" width="690" height="302">
</div>
</div>

<div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="173.192.105.231" data-port="3540"></div>




</div>

<script src="/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/jquery-migrate.min.js"></script>

<script src="/js/materializecss/bin/materialize.min.js"></script>

<script src="/js/jquerycookie.js"></script>

<script src="/components/slick/slick.min.js"></script>
<script src="/components/skrollr/skrollr.min.js"></script>

<script src="/components/swipebox/lib/ios-orientationchange-fix.js"></script>
<script src="/components/swipebox/src/js/jquery.swipebox.min.js"></script>

<script src="/components/countdown/js/jquery.knob.js"></script>
<script src="/components/countdown/js/jquery.throttle.js"></script>
<script src="/components/countdown/js/jquery.classycountdown.min.js"></script>

<!--[if IE]><script src="/components/soundmanager/script/excanvas.js"></script><![endif]-->
<script src="/components/soundmanager/script/berniecode-animator.js"></script>
<script src="/components/soundmanager/script/soundmanager2-nodebug.js"></script>
<script src="/components/soundmanager/script/shoutcast.js"></script>
<script src="/components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js"></script>

<script src="/components/popup/popup.js"></script>

<script src="/js/qt-main.js"></script>
<script type="text/javascript">
  $("body").on("click",".remove-event",function(){
    var current_object = $(this);
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    },function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
</script>
<script>
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

</script>
@if($event->latitude && $event->longitude)

<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
 
 // var i='{{$event->name}} ';
 // var j=' {{$event->categorie}} ';
 //function longitude(){    var i=10.8113;     return(i);}
 // const uluru = { lat: i, lng: j  };
  var latLng = new google.maps.LatLng('{{ $event->latitude }}', '{{ $event->longitude }}');
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: latLng,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: latLng,
    map: map,
  });
}
</script>
@endif
</body>

</html>



    
        
