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
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body data-spy="scroll" data-target=".fixed-top">


<nav class="qt-menubar nav-wrapper qt-content-primary ">

<ul class="qt-desktopmenu hide-on-xl-and-down">
<li class="qt-logo-link"><a href="/" class="brand-logo qt-logo-text">RADIO  <span>TICKETS</span></a></li>


</ul>

   
<ul class="qt-desktopmenu hide-on-xl-only ">
<li><a href="/" class="brand-logo qt-logo-text">Radio Tickets</a></li>
</ul>

</nav>

    <div class="qt-container qt-vertical-padding-l">
        <div class="row">
            <div class="col s12 m8 push-m2">    

    
                
                    <div id="booking" class="section qt-section-booking qt-card">
                        <div class="qt-valign-wrapper">
                            <div class="qt-valign flow-text">
                                <div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">                                       
                                    <ul class="tabs">                      
                                        <li class="tab col s4">
                                            <h5><a  class="active">SUBSCRIPTION PAYMENT</a></h5>
                                        </li>
                                    </ul>
                                    
                                    <div class="row">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <select name="plan"  id="subscription-plan" disabled>
                                                @foreach($plans as $key=>$plan)
                                                    <option value="{{$key}}">{{$plan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <input id="card-holder-name"  type="text" Placeholder="card-holder-name">
                                            
                                        </div>
                                        </div>
                                        <!-- Stripe Elements Placeholder -->
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <div id="card-element" ></div>

                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">

                                            <button id="card-button" data-secret="{{ $intent->client_secret }}"class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light ">
                                                Subscribe
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>


    <script>
        window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;

            const plan = document.getElementById('subscription-plan').value;
            
            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    console.log('errorrrrr');
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);

                    axios.post('/subscribe',{
                        payment_method: setupIntent.payment_method,
                        plan : plan
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                    
                }
            });
        })
    </script>



    <script src="/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
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

<script src="/components/soundmanager/script/berniecode-animator.js"></script>
<script src="/components/soundmanager/script/soundmanager2-nodebug.js"></script>
<script src="/components/soundmanager/script/shoutcast.js"></script>
<script src="/components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js"></script>

<script src="/components/popup/popup.js"></script>

<script src="/js/qt-main.js"></script>

    

</body>


</html>

