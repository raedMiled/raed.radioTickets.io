@extends('mainLayout')

@section('content')
<div class="qt-container qt-vertical-padding-s">
    <div class="row">
  
        <div class="col s12 m8 push-m2">
            <div id="booking" class="section qt-section-booking qt-card">
                <div class="qt-valign-wrapper">
                    <div class="qt-valign flow-text">
                        <div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">
                            <div  class="row">
                                <form class="col s12" method="POST" action=" {{ route('save.music') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <h5>Uploud a song</h5>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input  name="title" type="text" class="@error('title') alert-danger @enderror"  value="{{old('title')}}" >
                                                    <label for="title" >NAME OF THE SONG</label>
                                                    @error('title') 
                                                        <p class="alert alert-danger">{{$errors->first('title')}}</p> 
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input  name="artist" type="text" class="@error('artist') alert-danger @enderror"  value="{{old('artist')}}" >
                                                    <label for="artist" >NAME OF THE ARTIST</label>
                                                    @error('artist') 
                                                        <p class="alert alert-danger">{{$errors->first('artist')}}</p> 
                                                    @enderror
                                                </div>
                                            </div>
                                            <input name="song" type="file"  class="input-field @error('song') alert-danger @enderror" value="{{old('song')}}" >
                                            @error('song') 
                                                <p class="alert alert-danger">{{$errors->first('song')}}</p> 
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" >
                                                uploud
                                            </button>
                                            <a class="qt-btn qt-btn-l  qt-btn-secondary  qt-spacer-m waves-effect waves-light " href="/home/admin">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                            <h5>list of all the songs</h5>
                            </div>
                            @foreach($music as $music)
                                <div class="row">
                                <table class="table.responsive-table">
                                <tr>
                                    <audio  controls >
                                        <source  src="/storage/music/{{$music->song}}" type="audio/ogg">
                                        <source  src="/storage/music/{{$music->song}}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <form method="POST" id="delete-music" action="{{route('delete.music',  ['music' => $music->id])}}">
                                            @csrf
                                            @method('DELETE')
                                                <button  type="submit" class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" onclick="return confirm('Sure Want Delete?')" style="margin-top: -30px;margin-left: 20px;" >delete this song</button>
                                    </form>
                                    </tr>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection