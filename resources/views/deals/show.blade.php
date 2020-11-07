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
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <style>
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
        .qt-btn-secondary{
            margin-left:30px
        }
       
    </style>

</head>

<body data-spy="scroll" data-target=".fixed-top">



<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/" class="brand-logo qt-logo-text">RADIO  <span>TICKETS</span></a></li>

<li><a href="/eventPage">Events</a>
<li><a href="/dealPage">Deals</a>
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
<li><a href="/" class="brand-logo qt-logo-text">Radio Tickets</a></li>
</ul>

</nav>

<div id="qt-mobile-menu" class="side-nav qt-content-primary">
<ul class=" qt-side-nav">
<li><a href="/">Home</a></li>
<li ><a href="/eventPage">Events</a>
</li>
<li ><a href="/dealPage">Deals</a>
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
<form method="POST" action="{{ route('searchGuest') }}" class="qt-inline-form">
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
                    <a href="#!" class="qt-btn qt-btn-l qt-btn  qt-fullwidth aligncenter" data-expandable="#qtsearchbar"><i class="dripicons-cross"></i></a>
                </div>
            </div>
        </form>
</div>
</div>


<div class="qt-part-event-featured qt-card qt-negative qt-vertical-padding-l">
<div class="qt-event-featured-content">
<h1 class="qt-spacer-s">{{$deal->name}}</h1><br>
<h3 class="qt-caption qt-spacer-s">Time Remaining Before The deal</h3>
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
<img src="/storage/images/{{$deal->poster}}" alt="Header image" width="600" height="525" class="qt-img-responsive">
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
<div class="qt-content">
    
                   
                    
                        <form method="POST" action="{{route('reserveClient.deal', ['deal' => $deal->id])}}">
                            @csrf
                            @method('GET')
                            <button  type="submit" class=" qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" >get resrvation for this deal</button>
                            
                        </form>
                    
                   
</div>
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

<!--<div class="col s12 m3 l12">
<div class="qt-widget">
<h5 class="qt-caption-small">
<span>Position</span>
</h5>
<div class="qt-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.9899192531298!2d-123.04142404893491!3d44.94387287592946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54bfff0c89be210f%3A0x79aa007f04406672!2s295+Center+St+NE%2C+Salem%2C+OR+97301%2C+USA!5e0!3m2!1sen!2ses!4v1478257655617" width="600" height="250" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>-->

<div class="col s12 m3 l12">
    <div class="qt-widget">
        <h5 class="qt-caption-small"><span>Newest deals</span></h5>
            <ul class="qt-widget-upcoming">
            @foreach($deals as $deal1)
                <li class="qt-card-s paper">
                    <h5>
                        <a href="{{route('show.deal', ['deal' => $deal1->id])}}">{{$deal1 -> name}}</a>
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
</body>

</html>
<script type="text/javascript">
  $("body").on("click",".remove-deal",function(){
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


    
        
</body>


</html>