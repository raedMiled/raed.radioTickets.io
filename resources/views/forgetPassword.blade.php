<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.distinctivepixels.com/templates/milea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 11:27:57 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="DistinctivePixels">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:100,200,300,400,500,600,700,800,900%7CMontserrat:300,400,500,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/assets/images/site-icon.png"/>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/icons.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/fancybox.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/slick.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/aos.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <title>Milea - A business theme cooked up by DistinctivePixels</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/assets/js/app.js') }}" defer></script>

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <div id="search-panel" class="d-flex">
        <div class="container align-self-center">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-12">
                    <form class="mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col">
                                <input id="search-form" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                            </div>
                            <div>
                                <button class="btn btn-lg btn-black btn-circled ml-3" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-auto d-none d-lg-block">
                        <span class="mr-2 h6 mb-0 font-weight-bold">Popular Search Terms: </span>
                        <a href="#" data-search-term-value="Getting Started" class="badge badge-secondary">Company History</a>
                        <a href="#" data-search-term-value="Legal Advice" class="badge badge-secondary">Legal Advice</a>
                        <a href="#" data-search-term-value="Editing Files" class="badge badge-secondary">Editing Files</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content-wrapper">

        <div class="main-content-wrapper">

            <section class="bg-feature h-100 jarallax" data-jarallax data-speed="0.2" data-has-dark-bg>
                <img class="jarallax-img" src="/assets/images/login-bg.jpg" alt="Blog Hero">
                <div class="overlay-dark"></div>
                <div class="d-table h-100">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-sm-12 col-md-12 text-center">

                                    <div data-aos="fade-down" data-aos-delay="100">
                                        <a href="index.html">
                                            <img src="/assets/images/logo.png" alt="" class="img-fluid mb-5 img-200">
                                        </a>
                                    </div>

                                    <div class="col-lg-6 offset-lg-3 text-left" data-aos="fade-up" data-aos-delay="300">

                                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                                        
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif
                                            
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }},
                                        <form  class="form text-dark card box-shadow rounded" action="{{ route('verification.resend') }}" method="POST"> 
                                            @csrf
                                                <div class="form-group">                                                    
                                                    <!-- <input type="submit" name="submit" class="btn btn-circled btn-black" value="submit"> -->
                                                    <button type="submit"  class="btn btn-link p-0 m-0 align-baseline" class="btn btn-circled btn-black">
                                                        {{ __('click here to request another') }}
                                                    </button>
                                                </div>
                                               
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7P98kEb-d-okkRN-UjltzzsJ9o9OX8DY&amp;region=GB"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/bootstrap/js/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.waypoints.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script src="/assets/js/simple-player.js"></script>
    <script src="/assets/js/tweenmax.js"></script>
    <script src="/assets/js/gmap3.min.js"></script>
    <script src="/assets/js/jarallax.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/fancybox.js"></script>
    <script src="/assets/js/countdown.js"></script>
    <script src="/assets/js/svg-inject.js"></script>
    <script src="/assets/js/goodshare.js"></script>
    <script src="/assets/js/instafeed.js"></script>    
    <script src="/assets/js/typed.js"></script>
    <script src="/assets/js/twitter-fetcher.js"></script>
    <script src="/assets/js/init.js"></script>

</body>


<!-- Mirrored from demos.distinctivepixels.com/templates/milea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 11:28:00 GMT -->
</html>