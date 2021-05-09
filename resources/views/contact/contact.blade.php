@extends('mainLayout')

@section('content')



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
            <div class="input-field col s3">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name" >{{ __('NAME') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="input-field col s4">
                <input id="phone" type="tel" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                <label for="phone" >{{ __('Phone Number') }}</label>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        

        
            <div class="input-field col s5">
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
            <div class="input-field col s6">
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
            <div class="input-field col s6">
                <button class="qt-btn qt-btn-l qt-btn-primary waves-effect waves-light" type="submit" >
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





@endsection