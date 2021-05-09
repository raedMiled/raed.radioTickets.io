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
                        <h4  class="comment-reply-title">
                            My Account
                        </h4>
                    </li>
                </ul>
                @can('show-edit-user', $user)
                <div  class="row">
                    <h5  class="comment-reply-title">
                        Your Personal Details :
                    </h5>
                    <form class="col s12" method="POST" action="{{route('update.user', ['user' => $user->id])}}" >
                    @csrf

                    @method('PUT')

                        <div class="row qt-spacer-s">
                            <div class="input-field col s6">
                                
                                            
                                <input  name="name" type="text" class="@error('name') alert-danger @enderror"  value="{{$user->name}}" >
                                <label for="name" >USER NAME</label>
                                @error('name') 
                                    <p class="alert alert-danger">{{$errors->first('name')}}</p> 
                                @enderror
                            </div>
                            <div class="input-field col s6"> 
                                <button class="qt-btn qt-btn-m qt-btn-primary  waves-effect waves-light" type="submit" >
                                    Change
                                </button>
                                
                            </div>
                            
                        </div> 
                    </form>
                </div>
                <div  class="row">
                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="col s12" action="{{ route('password.email') }}" method="POST">
                    @csrf

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror just-read" name="email" value="{{$user->email}}" required autocomplete="email" readonly>
                                <label for="email" >{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="input-field col s6">
                                <button class="qt-btn qt-btn-m qt-btn-primary waves-effect waves-light" type="submit" >
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div  class="row">
                    <h5  class="comment-reply-title">
                        Your Membership Details :
                    </h5>
                    <div class="row qt-spacer-s">
                        <div class="input-field col s6">      
                            <input  name="name" type="text" class="@error('name') alert-danger @enderror just-read"  value="{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y')}}" readonly>
                            <label for="name" >MEMBER SINCE</label>
                            @error('name') 
                                <p class="alert alert-danger">{{$errors->first('name')}}</p> 
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <a class="qt-btn qt-btn-l  qt-btn-primary waves-effect waves-light " href="/home">Cancel</a>
                    </div>
                </div>
                @endcan
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
</div>




@endsection