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
    <script src="{{ asset('resources/js/app.js') }}" defer></script>
    

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
           
        }
        .searchBar{
            min-width: 87%;
            max-width: 87%;
            margin:auto;
        }
        .imgsb{
            margin-top: 12px;
        }
        
        .sel1{
            margin-left: 55%;
            
        }
        .sel2{
            margin-left: -8%;
        }
        .lct{
            min-height:48px;
            max-height:48px;
            margin-left:73px;
            margin-top: 6px;
            background-color: rgba(255,255,255,.9);
            pointer-events: none;
        }
        .ctgr{
            min-height:48px;
            max-height:48px;
            margin-left: 138%;
            margin-top: 6px;
            background-color: rgba(255,255,255,.9);
            pointer-events: none;

        }
        .sec{
            min-height:49px;
            max-height:49px;
            margin-left: -265%;
            margin-top: 6px;
        }
        .crd{
            min-height:50px;
            max-height:50px;
            margin-left: -215%;
            margin-top: 5px;
        }
        .lis{
            min-height:50px;
            max-height:50px;
            margin-left: -170%;
            margin-top: 5px;
        }
       
       /* @media screen and (max-width: 600px) {
table {width:100%;}
thead {display: none;}
tr:nth-of-type(2n) {background-color: inherit;}
tr td:first-child {background: #f0f0f0; font-weight:normal;font-size:1.3em;}
tbody td {display: block;  text-align:left;}
tbody td:before { 
    content: attr(data-th); 
    display: block;
    text-align:left;  
  font-weight: normal;
  }
  tbody td::before {
  content: attr(data-th);
  display: none;
}
}*/
    .usr{
        margin-top: -15px;
        max-height: 82px;
        min-height: 82px;
    } 
    .usrl{
        margin-top: -30px;
    } 
    .qt-archive-team{
        margin-top: -60px;
        margin-bottom: -60px;
    } 
        
        
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">



<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/home" class="brand-logo qt-logo-text">RADIO  <span>TICKETS</span></a></li>
<li class="qt-logo-link"><a href="#" class="brand-logo qt-logo-text" >       </a></li>

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
<li><a href="/home/contacts">Contacts</a>

</li>
</li>


    <li class="right"><button  data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
    <li class="right"><a href="radio" class="qt-popupwindow" data-name="Music Player" data-width="800" data-height="500"><i class="icon dripicons-media-play"></i> Listen</a></li>
    @guest
           
        @if (Route::has('register'))
            <li class="right"><a href="/register" class="button"> Register Now</a></li>
            <li class="right"><a href="/login" class="button" > Login</a></li> 
        @endif
        @else
            <li class="right ">
                <a class="usr" ><table><tr><td ><img src="/imagestemplate/icons8-user-32.png" ></td><td>{{ Auth::user()->name }}</td></tr></table></a>
                <ul>
                    <li><a class="usrl" href="{{ route('logout') }}"
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
<li><a href="radio" class="qt-popupwindow" data-name="Music Player" data-width="800" data-height="500"><i class="icon dripicons-media-play"></i></a></li>
<!--<li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>-->
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



<div class="qt-container qt-vertical-padding-s">
<div class="row">
<div class="col s12 m8 push-m2">             
                

<div id="booking" class="section qt-section-booking qt-card">
<div class="qt-valign-wrapper">
<div class="qt-valign flow-text">
<div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">                                       
<ul class="tabs">                      
<li class="tab col s4">
<h5><a  class="active">Send us a message</a></h5></li>
</ul>
<div  class="row">
@if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ __('Your message has been sent to us.') }}
        </div>
    @endif
    <form class="col s12" action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="row">
            <div class="input-field col s12">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name" >{{ __('NAME') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="email" >{{ __('Your E-Mail Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
       <div class="row">
            <div class="input-field col s12">
                <input id="phone" type="tel" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                <label for="phone" >{{ __('Phone Number') }}</label>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <h5>Message</h5>
                    <textarea  name="comment" id="comment" class="form-control @error('comment') alert-danger @enderror" maxlength="300" rows="6">{{ old('comment') }}</textarea>
                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!--<div class="row">
        @if(config('services.recaptcha.key'))
            <div class="g-recaptcha"
                data-sitekey="{{config('services.recaptcha.key')}}">
            </div>
        @endif
        </div>-->
        <div class="row">
            <div class="input-field col s12">
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6 pull-center">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    </div>        
        

        
        <div class="row">
            <div class="input-field col s12">
                <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" >
                    {{ __('Submit') }}
                </button>
                
            </div>
        </div>
    </form>
</div>
{!! NoCaptcha::renderJs() !!}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--<div class="qt-container qt-vertical-padding-s">
    <div class="row">
        <div class="col s12 m8 push-m2">

            <div id="booking" class="section qt-section-booking qt-card">
                <div class="qt-valign-wrapper">
                    <div class="qt-valign flow-text">
                        <div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">
                            <ul class="tabs">
                                <li class="tab col s4">
                                    <h5><a  class="active">Send a message</a></h5>
                                </li>
                            </ul>
                            <div id="form" class="row">
                                <form class="col s12" method="post" action="http://qantumthemes.xyz/onair2/demo/email_sender.php">
                                     <div class="row">
                                        <div class="input-field col s12">
                                            <input name="email" id="formemail" type="email" class="validate">
                                            <label>Your Email Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <input name="phone" id="phone" type="tel" class="validate">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea  name="message" id="message" class="materialize-textarea" maxlength="300" rows="6"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input name="privacy" type="checkbox" id="privacy" value="1" />
                                            <label for="privacy">I red and accept the <a href="#" target="_blank">privacy terms</a>.</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" name="action">
                                                <span class="lnr lnr-rocket"></span> Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>-->





<div class="qt-footer-bottom qt-content-primary-dark">
    <div class="qt-container">
        <div class="row">
            <div class="col s12 m12 l8">
                RadioTickets Website | Powered By <a href="http://digikod.com/">digikod.com</a> Copyright 2020 All Rights Reserved
                
            </div>
               
        </div>
    </div>
</div>




   
   
                      

<!--<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
    <a class="qt-btn qt-btn button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

    <div id="qtplayercontainer" data-playervolume="true" data-accentcolor="#dd0e34" data-accentcolordark="#ff0442" data-textcolor="#ffffff" data-soundmanagerurl="./components/soundmanager/swf/" class="qt-playercontainer qt-playervolume qt-clearfix qt-content-primary">
        <div class="qt-playercontainer-content qt-vertical-padding-m">
            <div class="qt-playercontainer-header">
                <h5 class="qt-text-shadow small">Now on</h5>
                <h3 id="qtradiotitle" class="qt-text-shadow">STATION 1 RADIO</h3>
                <h4 id="qtradiosubtitle" class="qt-thin qt-text-shadow small">Subtitle of the radio</h4>
            </div>
            
            <div class="qt-playercontainer-musicplayer" id="qtmusicplayer">
                <div class="qt-musicplayer">
                    <div class="ui360 ui360-vis qt-ui360">
                    @foreach($music as $music1)
                        <a id="playerlink" href="/storage/music/{{$music1->song}}"></a>
                    @endforeach
                    </div>
                </div>
            </div>
            
            <div class="qt-playercontainer-data qt-container qt-text-shadow small">
                <h6 class="qt-inline-textdeco">
                    <span>Current track</span>
                </h6>
                <div class="qt-t qt-current-track">
                    <h5 >TITLE</h5>
                    <h6 class="qt-small" >ARTIST</h6>
                </div>
                <hr class="qt-inline-textdeco">
            </div>
        </div>
        <div id="playerimage" class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-44.jpg">
            <img src="/imagestemplate/full-1600-700/unsplash-44.jpg" alt="Featured image" width="1600" height="700">
        </div>
    </div>

    <div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="173.192.105.231" data-port="3540"></div>

    
    <div class="qt-part-channels-list">
        <ul class="qt-content-aside qt-channelslist qt-negative qt-side-nav">
            
            <li class="qt-channel menu-item-has-children"><a>Playlist 1</a>
                
                <ul>
                @foreach($music as $music)
                    <li>
                    <a id="playerlink" href="#!" class="qt-ellipsis" data-title="06AM Ibiza" data-subtitle="Underground Radio" data-background="/imagestemplate/full-1600-700/unsplash-44.jpg" data-logo="/imagestemplate/radio-logo.png" data-playtrack="/storage/music/{{$music->song}}" >
                    <img src="imagestemplate/radio-logo.png" alt="logo" class="qt-radiologo dripicons-media-play" width="80" height="80">
                    <i class="dripicons-media-play">{{$music->title}}</i> 
                    </a>
                    </li>
                @endforeach
                </ul>
            </li>
            
            
        </ul>
    </div>

</div>-->
<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
<a class="qt-btn qt-btn button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

<div id="cincopa_3e529f"class="qt-spacer-m">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cincopa_3e529f"; cpo["_fid"] = "AIMA3yei06UN";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "https://rtcdn.cincopa.com/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script>

<div id="cincopa_672491">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cincopa_672491"; cpo["_fid"] = "AIMA3yei06UN";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "https://rtcdn.cincopa.com/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script>


</div>
<!--<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-f64ba349-6889-4511-95fc-a75d8aa57732"></div>


</div>-->
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
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->


</script>
</body>

</html>