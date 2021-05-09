<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Radio Cash</title>
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


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

        .pht {
            height: 150px;
            margin-left: 100px
        }

        .qt-input-l,
        .qt-input-m {
            color: black;
        }

        .top {
            margin-top: -30px
        }

        .add {
            margin-left: 10px;
            font-weight: bold;

        }

        .hgt {
            height: 100%;
        }

        .ctg {

            font-weight: bold;


        }

        .tndd {
            margin-top: -10px;
        }

        .edt {

            color: #f50057;
            font-weight: bold;
            font-size: 1.4em;

        }

        option,
        select {
            font-size: 1rem;
            color: #454955;

        }

        .searchBar {
            min-width: 87%;
            max-width: 87%;
            margin: auto;
        }

        .imgsb {
            margin-top: 12px;
        }

        .sel1 {
            margin-left: 55%;

        }

        .sel2 {
            margin-left: -8%;
        }

        .sel11 {
            margin-left: 55%;
            margin-top: 6px;

        }

        .sel22 {
            margin-left: -8%;
            margin-top: 6px;
        }

        .lct {
            min-height: 48px;
            max-height: 48px;
            margin-left: 73px;
            margin-top: 6px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;
        }

        .ctgr {
            min-height: 48px;
            max-height: 48px;
            margin-left: 138%;
            margin-top: 6px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;

        }

        .lct1 {
            min-height: 48px;
            max-height: 48px;
            margin-left: 73px;
            margin-top: 12px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;
        }

        .ctgr1 {
            min-height: 48px;
            max-height: 48px;
            margin-left: 108.5%;
            margin-top: 12px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;

        }

        .sec {
            min-height: 49px;
            max-height: 49px;
            margin-left: -265%;
            margin-top: 6px;
        }

        .sec1 {
            min-height: 49px;
            max-height: 49px;
            margin-left: -40%;
            margin-top: 6px;
        }

        .crd {
            min-height: 49px;
            max-height: 49px;
            margin-left: -215%;
            margin-top: 6px;
        }

        .lis {
            min-height: 49px;
            max-height: 49px;
            margin-left: -170%;
            margin-top: 6px;
        }

        .qt-btn-secondary {
            margin-left: 30px
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
        .usr {
            margin-top: -15px;
            max-height: 82px;
            min-height: 82px;
        }

        .usrl {
            margin-top: -30px;
        }

        .qt-archive-team {
            margin-top: -60px;
            margin-bottom: -60px;
        }

        .just-read {
            color: #989696;
        }

        #more {
            display: none;
        }

        .read-more {

            text-decoration: none;
            color: #0000ff;
            font-weight: bold;
            padding: 0;
            border: none;
            background: none;
        }

        .ime {
            min-width: 485px;
            min-height: 325.5px;
            max-width: 485px;
            max-height: 325.5px;

            object-fit: cover;

        }

        .ime1 {
            min-width: 485px;
            min-height: 108.5px;
            max-width: 485px;
            max-height: 108.5px;

            object-fit: cover;

        }

        .ime2 {
            margin-top: 5px;
            min-width: 485px;
            min-height: 216.5px;
            max-width: 485px;
            max-height: 216.5px;

            object-fit: cover;

        }

        .imee {
            min-width: 110px;
            min-height: 55px;
            max-width: 110px;
            max-height: 55px;

            object-fit: cover;
        }

        .tdta {
            width: 500px;
        }

        .imn {
            min-width: 110px;
            min-height: 100%;
            max-width: 110px;
            max-height: 100%;
        }

        .block1 {
            margin-top: -100px;
        }

        .block2 {
            margin-top: 53px;
            min-width: 250px;
            min-height: 200px;
            max-width: 250px;
            max-height: 200px;
            font-size: 1.2em;
            line-height: 150%;
            text-align: justify;
        }

        .block3 {
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

        .block4 {
            margin-top: -100px;
        }

        .tdtab {
            margin-top: -50px;
            min-width: 200px;
            max-width: 200px;
            min-height: 300px;
            max-height: 300px;
        }

        .block5 {
            margin-top: 40px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">



    <nav class="qt-menubar nav-wrapper qt-content-primary ">

        <ul class="qt-desktopmenu hide-on-xl-and-down">

            <li class="qt-logo-link"><a href="/home" class="brand-logo qt-logo-text">RADIO <span>CASH</span></a></li>

            <li class="qt-logo-link"><a href="#" class="brand-logo qt-logo-text"> </a></li>
            @can('approve_request')
            <li><a href="/home/admin">Administrator</a>
                <ul>
                    <li><a href="/home/admin/users">Users</a></li>
                    <li><a href="/home/admin/events">Approve Events</a></li>
                    <li><a href="/home/admin/deals">Approve Deals</a></li>
                </ul>
            </li>
            @endcan
            <!--<li><a href="/home/event">Events</a>
        <ul>
            <li><a href="/home/events">My Events</a></li>
            <li><a href="/home/events/create">Create Event</a></li>
        </ul>
    </li>-->
            <li><a href="/home/deal">Deals</a>
                <ul>
                    <li><a href="/home/deals">My Deals</a></li>
                    <li><a href="/home/deals/create">Create Deal</a></li>
                </ul>
            </li>
            <li><a href="/home/contacts">Contacts</a></li>



            <li class="right"><button data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
            <li class="right"><a href="/radio" class="qt-popupwindow" data-name="Music Player" data-width="800" data-height="500"><i class="icon dripicons-media-play"></i> Listen</a></li>
            <!--<li class="right"><a  class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i> Listen</a></li>-->
            @guest

            @if (Route::has('register'))
            <li class="right"><a href="/register" class="button"> Register Now</a></li>
            <li class="right"><a href="/login" class="button"> Login</a></li>
            @endif
            @else
            <li class="right ">
                <a href="{{route('edit.user', [ Auth::user()->id])}}" class="usr">
                    <table>
                        <tr>
                            <td><img src="/imagestemplate/icons8-user-32.png"></td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                    </table>
                </a>
                <ul>
                    <li><a class="usrl" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                    <!--<li><a href="/home/events">My Events</a></li>
<li><a href="/home/events/create">Create Event</a></li>
</ul>
</li>-->
                    <li class="menu-item-has-children"><a href="/home/deal">Deals</a>
                        <ul>
                            <li><a href="/home/deals">My Deals</a></li>
                            <li><a href="/home/deals/create">Create Deal</a></li>
                        </ul>
                    </li>
                    <li><a href="/home/contacts">Contacts</a></li>
                </ul>
    </div>


    <ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
        <li><a href="#!" data-expandable="#qtsearchbar" class="qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
        <li><a href="/radio" class="qt-popupwindow" data-name="Music Player" data-width="800" data-height="500"><i class="icon dripicons-media-play"></i></a></li>
        <!--<li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>-->
        @guest

        <li><a href="/login" class="button"> Login</a></li>
        @if (Route::has('register'))
        <li><a href="/register" class="button"> Register Now</a></li>

        @endif
        @else

        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
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


    @yield('content')

    <div class="qt-footer-bottom qt-content-primary-dark">
        <div class="qt-container">
            <div class="row">
                <div class="col s12 m12 l8">
                    RadioCash.ch Website | Powered By <a href="http://digikod.com/">digikod.com</a> Copyright 2020 All Rights Reserved

                </div>

            </div>
        </div>
    </div>








    <!--<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
<a class="qt-btn button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

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
<div class="qt-playercontainer-data qt-container qt-text-shadow small">
                <h6 class="qt-inline-textdeco">
                    <span>Current track</span>
                </h6>
                <div class="qt-t qt-current-track">
                    <h5 id="qtFeedPlayerTrack">TITLE</h5>
                    <h6 class="qt-small" id="qtFeedPlayerAuthor">ARTIST</h6>
                </div>
                <hr class="qt-inline-textdeco">
            </div>
        </div>

<div id="playerimage" class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-44.jpg">
<img src="/imagestemplate/full-1600-700/unsplash-44.jpg" alt="Featured image" width="690" height="302">
</div>
</div>

<div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="173.192.105.231" data-port="3540"></div>




</div>-->

    <div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
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
                            <a id="playerlink" href="http://freshly-ground.com/data/audio/sm2/Adrian Glynn - Blue Belle Lament.mp3"></a>
                        </div>
                    </div>
                </div>
                <div class="qt-playercontainer-data qt-container qt-text-shadow small">
                    <h6 class="qt-inline-textdeco">
                        <span>Current track</span>
                    </h6>
                    <div class="qt-t qt-current-track">
                        <h5 id="qtFeedPlayerTrack">TITLE</h5>
                        <h6 class="qt-small" id="qtFeedPlayerAuthor">ARTIST</h6>
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
            <ul class="qt-content-aside qt-channelslist qt-negative">
                <li class="qt-channel">
                    <a href="#!" class="qt-ellipsis" data-title="06AM Ibiza" data-subtitle="Underground Radio" data-background="imagestemplate/photo-squared-500-500.jpg" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://173.192.105.231:3540/stream.mp3" data-host="173.192.105.231" data-port="3540" data-stats_path="" data-played_path="" data-channel="">
                        <img src="/imagestemplate/radio-logo.png" alt="logo" class="qt-radiologo dripicons-media-play" width="80" height="80">
                        <i class="dripicons-media-play"></i> Station 1
                    </a>
                </li>
                <li class="qt-channel">
                    <a href="#!" class="qt-ellipsis" data-title="altradio" data-subtitle="The subtitle of radio 2" data-background="imagestemplate/large-1170-512/unsplash-44.jpg" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://82.77.137.30:8557/;listen.mp3" data-host="82.77.137.30" data-port="8557" data-stats_path="" data-played_path="" data-channel="">
                        <img src="/imagestemplate/radio-logo.png" alt="logo" class="qt-radiologo" width="80" height="80">
                        <i class="dripicons-media-play"></i> altradio
                    </a>
                </li>
            </ul>
        </div>

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
        var div2 = document.getElementById('moree');
        var div1 = document.getElementById('dotss');
        div1.style.display = 'none';
        button1.onclick = function() {
            if (div1.style.display !== 'none') {
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
    <script type="text/javascript">
        $("body").on("click", ".remove-deal", function() {
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
            }, function(result) {
                if (result) {
                    var action = current_object.attr('data-action');
                    var token = jQuery('meta[name="csrf-token"]').attr('content');
                    var id = current_object.attr('data-id');

                    $('body').html("<form class='form-inline remove-form' method='post' action='" + action + "'></form>");
                    $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
                    $('body').find('.remove-form').append('<input name="_token" type="hidden" value="' + token + '">');
                    $('body').find('.remove-form').append('<input name="id" type="hidden" value="' + id + '">');
                    $('body').find('.remove-form').submit();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $("body").on("click", ".remove-event", function() {
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
            }, function(result) {
                if (result) {
                    var action = current_object.attr('data-action');
                    var token = jQuery('meta[name="csrf-token"]').attr('content');
                    var id = current_object.attr('data-id');

                    $('body').html("<form class='form-inline remove-form' method='post' action='" + action + "'></form>");
                    $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
                    $('body').find('.remove-form').append('<input name="_token" type="hidden" value="' + token + '">');
                    $('body').find('.remove-form').append('<input name="id" type="hidden" value="' + id + '">');
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



</body>

</html>