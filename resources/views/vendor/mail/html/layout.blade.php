<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">
{{ Illuminate\Mail\Markdown::parse($slot) }}

{{ $subcopy ?? '' }}
</td>
</tr>
</table>
</td>
</tr>

{{ $footer ?? '' }}
</table>
</td>
</tr>
</table>
</body>
</html>

<!--<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
    @media only screen and (max-width: 1200px) {
    .li{
        width: 100%;
        align: center;
    }
    .ul{
        width: 100%;
        align: center;
    }
    .nav{
        width: 100%;
        align: center;
    }
}
    @media only screen and (max-width: 1200px) {
.inner-body {
width: 100% !important;
align: center;
}

.footer {
width: 100% !important;
align: center;
}
}

@media only screen and (max-width: 1200px) {
.button {
width: 100% !important;
}
}
</style>



</head>

<body data-spy="scroll" data-target=".fixed-top">



<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/" class="brand-logo qt-logo-text">RADIO  <span>TICKETS   </span></a></li>



</ul>
   

</nav>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation" align="center">

    <tr>
        <td class="content-cell">
            {{ Illuminate\Mail\Markdown::parse($slot) }}

            {{ $subcopy ?? '' }}
        </td>
    </tr>
    
</table>

{{ $footer ?? '' }}                       
                            
                      
             







   
   
                      



<script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.min.js"></script>

<script src="js/materializecss/bin/materialize.min.js"></script>

<script src="js/jquerycookie.js"></script>

<script src="components/slick/slick.min.js"></script>
<script src="components/skrollr/skrollr.min.js"></script>

<script src="components/swipebox/lib/ios-orientationchange-fix.js"></script>
<script src="components/swipebox/src/js/jquery.swipebox.min.js"></script>

<script src="components/countdown/js/jquery.knob.js"></script>
<script src="components/countdown/js/jquery.throttle.js"></script>
<script src="components/countdown/js/jquery.classycountdown.min.js"></script> -->

<!--[if IE]><script src="components/soundmanager/script/excanvas.js"></script><![endif]
<script src="components/soundmanager/script/berniecode-animator.js"></script>
<script src="components/soundmanager/script/soundmanager2-nodebug.js"></script>
<script src="components/soundmanager/script/shoutcast.js"></script>
<script src="components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js"></script>

<script src="components/popup/popup.js"></script>

<script src="js/qt-main.js"></script>
</body>

</html>


    
        
</body>


</html> -->