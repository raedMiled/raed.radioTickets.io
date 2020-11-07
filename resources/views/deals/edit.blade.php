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
        
        
        .pht {
            height: 150px;
            margin-left:100px
        }
        .qt-input-l {
            color: black;
        }

       
    </style>

</head>

<body data-spy="scroll" data-target=".fixed-top">



<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/home" class="brand-logo qt-logo-text">RADIO  <span>TICKETS</span></a></li>
@can('approve_request')
<li><a href="/home/admin">Administrator</a>
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
<div class="qt-slickslider-container">
<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">


<div class="qt-pageheader qt-content-primary qt-section">
<div class="qt-container">
<h1 class="qt-caption qt-spacer-s">
Update deal
</h1>
</div>
<div class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/shutterstock_177378965.jpg">
<img src="/imagestemplate/full-1600-700/shutterstock_177378965.jpg" alt="Featured image" width="1600" height="530">
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
Update my deal
</h4></li>
</ul>
@can('show-deal', $deal)
<div  class="row">
    <form class="col s12" method="POST" action="{{route('update.deal', ['deal' => $deal->id])}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')

        <div class="row">
            <div class="input-field col s12">
            <input  name="name" type="text" class="@error('name') alert-danger @enderror"  value="{{$deal->name}}" >
                <label for="name" >NAME OF THE deal</label>
                @error('name') 
                    <p class="alert alert-danger">{{$errors->first('name')}}</p> 
                @enderror
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <h5>Time end of the deal</h5>
                <input name="timeEnd" type="time"  class="@error('timeEnd') alert-danger @enderror"  value="{{$deal->timeEnd}}">
                @error('timeEnd') 
                    <p class="alert alert-danger">{{$errors->first('timeEnd')}}</p> 
                @enderror  
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <h5>date end of the deal</h5>
                <input name="dateEnd" type="date"  class=" @error('dateEnd') alert-danger @enderror"  value="{{$deal->dateEnd}}">
                @error('dateEnd') 
                    <div class="alert alert-danger">{{$errors->first('dateEnd')}}</div> 
                @enderror  
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
            <input  name="address" type="text" class="@error('address') alert-danger @enderror" value="{{$deal->address}}">
                <label for="name" >ADDRESS OF THE DEAL</label>
                @error('address') 
                    <p class="alert alert-danger">{{$errors->first('address')}}</p> 
                @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <?php
                $ss=$deal->categorie;
            ?>
            <select class="@error('categorie') alert-danger @enderror" name="categorie" size="1" >
                <option value="" hidden="hidden">choose a categorie</option>
                <option value="computers" @if (old('categorie') == 'computers') selected="selected" @endif @if ($ss == 'computers') selected="selected" @endif>computers</option>
                <option value="booksAndMagazines" @if (old('categorie') == 'booksAndMagazines') selected="selected" @endif @if ($ss == 'booksAndMagazines') selected="selected" @endif>books and magazines</option>
                <option value="finance" @if (old('categorie') == 'finance') selected="selected" @endif @if ($ss == 'finance') selected="selected" @endif>finance</option>
                <option value="education" @if (old('categorie') == 'education') selected="selected" @endif @if ($ss == 'education') selected="selected" @endif>education</option>
                <option value="autos" @if (old('categorie') == 'autos') selected="selected" @endif @if ($ss == 'autos') selected="selected" @endif>autos</option>
                <option value="entertainment" @if (old('categorie') == 'entertainment') selected="selected" @endif @if ($ss == 'entertainment') selected="selected" @endif>entertainment</option>
                <option value="clothingAndAccessories" @if (old('categorie') == 'clothingAndAccessories') selected="selected" @endif @if ($ss == 'clothingAndAccessories') selected="selected" @endif>clothing and accessories</option>
                <option value="healthAndBeauty" @if (old('categorie') == 'healthAndBeauty') selected="selected" @endif @if ($ss == 'healthAndBeauty') selected="selected" @endif>health and beauty</option>
                <option value="homeAndHomeImprovement" @if (old('categorie') == 'homeAndHomeImprovement') selected="selected" @endif @if ($ss == 'homeAndHomeImprovement') selected="selected" @endif>home and home improvement</option>
                <option value="travelAndVacations" @if (old('categorie') == 'travelAndVacations') selected="selected" @endif @if ($ss == 'travelAndVacations') selected="selected" @endif>travel and vacations</option>
                <option value="techAndElectronics" @if (old('categorie') == 'techAndElectronics') selected="selected" @endif @if ($ss == 'techAndElectronics') selected="selected" @endif>tech and electronics</option>
                <option value=" sportingGoods" @if (old('categorie') == 'sportingGoods') selected="selected" @endif @if ($ss == 'sportingGoods') selected="selected" @endif> sporting goods</option>
                <option value="services" @if (old('categorie') == 'services') selected="selected" @endif @if ($ss == 'services') selected="selected" @endif>services</option>
                <option value="restaurants" @if (old('categorie') == 'restaurants') selected="selected" @endif @if ($ss == 'restaurants') selected="selected" @endif>restaurants</option>
                <option value="other" @if (old('categorie') == 'other') selected="selected" @endif @if ($ss == 'other') selected="selected" @endif>other</option>
            </select>
            @error('categorie') 
                <p class="alert alert-danger">{{$errors->first('categorie')}}</p> 
            @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <?php
                $sd=$deal->discount;
            ?>
            <select class="@error('discount') alert-danger @enderror" name="discount" size="1" >
                <option value="" hidden="hidden">choose the discount</option>
                <option value="5%" @if (old('discount') == '5%') selected="selected" @endif @if ($sd == '5%') selected="selected" @endif>5%</option>
                <option value="10%" @if (old('discount') == '10%') selected="selected" @endif @if ($sd == '10%') selected="selected" @endif>10%</option>
                <option value="15%" @if (old('discount') == '15%') selected="selected" @endif @if ($sd == '15%') selected="selected" @endif>15%</option>
                <option value="20%" @if (old('discount') == '20%') selected="selected" @endif @if ($sd == '20%') selected="selected" @endif>20%</option>
                <option value="25%" @if (old('discount') == '25%') selected="selected" @endif @if ($sd == '25%') selected="selected" @endif>25%</option>
                <option value="30%" @if (old('discount') == '30%') selected="selected" @endif @if ($sd == '30%') selected="selected" @endif>30%</option>
                <option value="35%" @if (old('discount') == '35%') selected="selected" @endif @if ($sd == '35%') selected="selected" @endif>35%</option>
                <option value="40%" @if (old('discount') == '40%') selected="selected" @endif @if ($sd == '40%') selected="selected" @endif>40%</option>
                <option value="45%" @if (old('discount') == '45%') selected="selected" @endif @if ($sd == '45%') selected="selected" @endif>45%</option>
                <option value="50%" @if (old('discount') == '50%') selected="selected" @endif @if ($sd == '50%') selected="selected" @endif>50%</option>
                <option value="55%" @if (old('discount') == '55%') selected="selected" @endif @if ($sd == '55%') selected="selected" @endif>55%</option>
                <option value="60%" @if (old('discount') == '60%') selected="selected" @endif @if ($sd == '60%') selected="selected" @endif>60%</option>
                <option value="65%" @if (old('discount') == '65%') selected="selected" @endif @if ($sd == '65%') selected="selected" @endif>65%</option>
                <option value="70%" @if (old('discount') == '70%') selected="selected" @endif @if ($sd == '70%') selected="selected" @endif>70%</option>
                <option value="75%" @if (old('discount') == '75%') selected="selected" @endif @if ($sd == '75%') selected="selected" @endif>75%</option>
                <option value="80%" @if (old('discount') == '80%') selected="selected" @endif @if ($sd == '80%') selected="selected" @endif>80%</option>
                <option value="85%" @if (old('discount') == '85%') selected="selected" @endif @if ($sd == '85%') selected="selected" @endif>85%</option>
                <option value="90%" @if (old('discount') == '90%') selected="selected" @endif @if ($sd == '90%') selected="selected" @endif>95%</option>
                <option value="95%" @if (old('discount') == '95%') selected="selected" @endif @if ($sd == '95%') selected="selected" @endif>95%</option>
                <option value="100%" @if (old('discount') == '100%') selected="selected" @endif @if ($sd == '100%') selected="selected" @endif>100%</option>                
            </select>
            @error('discount') 
                <p class="alert alert-danger">{{$errors->first('discount')}}</p> 
            @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <h5>Poster of the deal</h5>
            <input name="poster" type="file"  class="input-field @error('poster') alert-danger @enderror" value="{{$deal->poster}}" >
                @error('poster') 
                    <p class="alert alert-danger">{{$errors->first('poster')}}</p> 
                @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <input  name="places" type="number" class="@error('places') alert-danger @enderror"  value="{{$deal->places}}" >
                <label for="places" >NUMBER OF ITEMS AVAILABLE</label>
                @error('places') 
                    <p class="alert alert-danger">{{$errors->first('places')}}</p> 
                @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
                <h5>description of the deal</h5>
                
                <textarea name="description" class="form-control @error('description') alert-danger @enderror"  rows="6" placeholder="description" >{{$deal->description}}</textarea>
                    @error('description') 
                        <p class="alert alert-danger">{{$errors->first('description')}}</p> 
                    @enderror 
            </div> 
        </div>                                  
            
        
        <div class="row">
            <div class="input-field col s12">
                <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" >
                    Update
                </button>
                <a class="qt-btn qt-btn-l  qt-btn-secondary  qt-spacer-m waves-effect waves-light " href="/deals/{{$deal->id}}/showClient">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endcan   
</div>

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


    
        
</body>


</html>