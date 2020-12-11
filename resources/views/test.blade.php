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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('/resources/js/app.js') }}" defer></script>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
        .pht {
            height: 150px;
            margin-left:100px
        }
        .qt-input-l,.qt-input-m {
            color: black;
        }
        .top{
            margin-top:-30px
        }
        .add{
            margin-left: 10px;
            font-weight: bold;

        }
        .hgt{
            height: 100%;            
        }
        .ctg{
            
            font-weight: bold;


        }
        .tndd
        {
            margin-top:-10px;
        }
        .edt{
            
            color: #f50057; 
            font-weight: bold;
            font-size:1.4em;
            
        }
        option,select{
            font-size: 1rem;
            color:#454955;
            margin: absolute;
           
        }
        .searchBar{
            min-width: 87%;
            max-width: 87%;
            margin:auto;
        }
        .imgsb{
            margin-top: 12px;
        }
        
        .sec{
            min-height:49px;
            max-height:49px;
            margin-left: -165%;
            margin-top: 4px;
        }
        .sel{
            margin-left: -110px;
            
        }
        .crd{
            min-height:50px;
            max-height:50px;
            margin-left: -50%;
            margin-top: 6px;
        }
        .lis{
            min-height:50px;
            max-height:50px;
            margin-left: -60%;
            margin-top: 6px;
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


    <li class="right"><button  data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
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
                    <a href="#!" class="qt-btn qt-btn-l qt-btn-secondary qt-fullwidth aligncenter" data-expandable="#qtsearchbar"><i class="dripicons-cross"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>


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
                                                            {{ \Carbon\Carbon::parse($event->time)->format('h:i')}}
                                                            </span>
                                                            <span class="day">
                                                            {{ \Carbon\Carbon::parse($event->date)->format('d M Y')}}
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

                        
<div id="qtsearchbar" class="qt-searchbar qt-content-primary searchBar">
    <div class="qt-expandable-inner">
    
        <form method="POST" action="{{ route('search.event') }}" class="qt-inline-form">
            @csrf
            
            <table>
                <tr>
                    
                    <td>
                        <h3 class="qt-caption-med" ><span style="background-color: #454955;">deals</span></h3>
                    </td>
                    <td >
                        <input placeholder="Search" value="" id="searchtex" type="text" class="validate qt-input-m" name="q">
                    </td>
                    <td style="width:6%;">
                        <button type="submit" value="" class="qt-btn qt-btn-s qt-btn-primary sec">
                            <img src="/imagestemplate/icons8-search-24.png" >
                        </button>                
                    </td>
                    <td style="width: 180px;">
                        <div class="validate qt-input-l ">   
                            <select name="c"  size="1"class="sel">
                                <option value="" hidden="hidden">Categorie</option>
                                <option value="party">party</option>
                                <option value="courses" >courses</option>
                                <option value="theater" >theater</option>
                                <option value="cinema" >cinema</option>
                                <option value="concert">concert</option>
                                <option value="tournament" >tournament</option>
                                <option value="exhibition" >exhibition</option>
                            </select>
                        </div>
                    </td>
                    
                    <td style="width: 180px;">
                        <div class="validate qt-input-l">   
                            <select   size="1"class="sel">
                                <option value="" hidden="hidden">City</option>
                                <option value="party">party</option>
                                <option value="courses" >courses</option>
                                <option value="theater" >theater</option>
                                <option value="cinema" >cinema</option>
                                <option value="concert">concert</option>
                                <option value="tournament" >tournament</option>
                                <option value="exhibition" >exhibition</option>
                            </select>
                        </div>
                    </td>
                    <td style="width:6%">
                        <a href="#!" class="qt-btn qt-btn-s qt-btn-primary crd"id="myBtn1">
                            <img src="/imagestemplate/icons8-grid-view-24.png" class="imgsb">
                        </a>                
                    </td>
                    <td style="width:6%">
                        <a href="#!" class="qt-btn qt-btn-s qt-btn-primary lis"id="myBtn2">
                            <img src="/imagestemplate/icons8-list-24.png" class="imgsb">
                        </a>                
                    </td> 
                </tr>
            </table>
        </form>
    </div>
</div>
                        <div class="qt-container qt-vertical-padding-m qt-archive-events"id="dots">
                            

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



                    
                        <div class="qt-container qt-vertical-padding-l  qt-archive-team"id="more">
                            <div class="row">
                            @foreach($deals as $deal)


                                <div class="col s12 m6 l4 ">
                                    <div class="qt-part-archive-item qt-item-chart ">
                                        <div class="qt-item-header">
                                            <div class="qt-header-top">
                                                <ul class="qt-tags">
                                                    <li><a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="ctg">{{$deal->categorie}}</a></li>
                                                </ul>
                                                <div class="qt-feedback">
                                                <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary ">{{$deal -> discount}}</a>
                                                </div>
                                            </div>
                                            <div class="qt-header-mid qt-vc">
                                               
                                            </div>
                                            <div class="qt-header-bottom">
                                                <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-plus"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$deal->address}}</p>
                                                </div>
                                            </div>
                                            <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal -> poster}}">
                                                <img src="/storage/images/{{$deal -> poster}}" alt="Featured image" width="690" height="690">
                                            </div>
                                            
                                        </div>
                                        <div class="qt-item-content-s qt-card">
                                                <h4 class="qt-ellipsis-2 qt-t">
                                                    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}">{{$deal -> name}}</a>
                                                </h4>
                        </div>
                                    </div>
                                </div>
                                @endforeach
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
<a class="qt-btn qt-btn-secondary button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

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
<script>
/*function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.display === "none") {
        dots.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.display = "none";
    } else {
        dots.display = "none";
        btnText.innerHTML = "Read less";
        moreText.display = "inline";
    }
}*/
var button1 = document.getElementById('myBtn1'); // Assumes element with id='button'
var button2 = document.getElementById('myBtn2');
var div2 = document.getElementById('more');
var div1 = document.getElementById('dots');
div1.style.display = 'none';    
button1.onclick = function() {
    if (div1.style.display !== 'none' ) {
        div1.style.display = 'none';
        div2.style.display = 'block';
    }
    
};

button2.onclick = function() {
   if (div2.style.display !== 'none') {
        div2.style.display = 'none';
        div1.style.display = 'block';
    }
};

</script>

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
</body>

</html>


    
        
