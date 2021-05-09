@extends('mainLayout')

@section('content')

<div class="qt-slickslider-container">
<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">


<div class="qt-pageheader qt-content-primary qt-section">
<div class="qt-container">
<h1 class="qt-caption qt-spacer-s">
Update event
</h1>
</div>
<div class="qt-header-bg" data-bgimage="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg">
<img src="/imagestemplate/full-1600-700/unsplash-01-1600-530.jpg" alt="Featured image" width="1600" height="530">
</div>
</div>
</div>
         

 
  
<div class="qt-container qt-vertical-padding-m">
<div class="row">
  
<div class="col s12 m8 push-m2">

<div id="booking" class="section qt-section-booking qt-card">
<div class="qt-valign-wrapper">
<div class="qt-valign flow-text">
<div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">                                       
<ul class="tabs">                      
<li class="tab col s4">
<h4  class="comment-reply-title">
Update my event
</h4></li>
</ul>
@can('show-event', $event)
<div  class="row">
    <form class="col s12" method="POST" action="{{route('update.event', ['event' => $event->id])}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')

        <div class="row">
            <div class="input-field col s12">
            <input  name="name" type="text" class="@error('name') alert-danger @enderror"  value="{{$event->name}}" >
                <label for="name" >NAME OF THE EVENT</label>
                @error('name') 
                    <p class="alert alert-danger">{{$errors->first('name')}}</p> 
                @enderror
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <h5>Time of the event</h5>
                <input name="time" type="time"  class="@error('time') alert-danger @enderror"  value="{{$event->time}}">
                @error('time') 
                    <p class="alert alert-danger">{{$errors->first('time')}}</p> 
                @enderror  
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <h5>date of the event</h5>
                <input name="date" type="date"  class=" @error('date') alert-danger @enderror"  value="{{$event->date}}">
                @error('date') 
                    <div class="alert alert-danger">{{$errors->first('date')}}</div> 
                @enderror  
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
            <!--<input  name="address" type="text" class="@error('address') alert-danger @enderror" value="{{$event->address}}">
                <label for="address" >ADDRESS OF THE EVENT</label>
                @error('address') 
                    <p class="alert alert-danger">{{$errors->first('address')}}</p> 
                @enderror -->
                <h5>ADDRESS OF THE EVENT</h5>
                @error('address') 
                    <p class="alert alert-danger">{{$errors->first('address')}}</p> 
                @enderror 
            <input placeholder="ADDRESS OF THE EVENT" id="pac-input"  name="address" type="text" class="@error('address') alert-danger @enderror" value="{{$event->address}}">
            <!--<input type="text" id="address-input" name="address_address" class="form-control map-input">-->
            <input type="hidden" name="latitude" id="address-latitude" value="{{$event->latitude}}" />
            <input type="hidden" name="longitude" id="address-longitude" value="{{$event->longitude}}" />
            <div id="map" style="height:500px; width:712px;"></div>
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <?php
                $ss=$event->categorie;
            ?>
            <select class="@error('categorie') alert-danger @enderror" name="categorie" size="1" >
                <option value="" hidden="hidden">choose a categorie</option>
                <option value="party" @if (old('categorie') == 'party') selected="selected" @endif @if ($ss == 'party') selected="selected" @endif>party</option>
                <option value="courses" @if (old('categorie') == 'courses') selected="selected" @endif  @if ($ss == 'courses') selected="selected" @endif>courses</option>
                <option value="theater" @if (old('categorie') == 'theater') selected="selected" @endif @if ($ss == 'theater') selected="selected" @endif >theater</option>
                <option value="cinema" @if (old('categorie') == 'cinema') selected="selected" @endif @if ($ss == 'cinema') selected="selected" @endif>cinema</option>
                <option value="concert" @if (old('categorie') == 'concert') selected="selected" @endif @if ($ss == 'concert') selected="selected" @endif>concert</option>
                <option value="tournament" @if (old('categorie') == 'tournament') selected="selected" @endif @if ($ss == 'tournament') selected="selected" @endif>tournament</option>
                <option value="exhibition" @if (old('categorie') == 'exhibition') selected="selected" @endif @if ($ss == 'exhibition') selected="selected" @endif>exhibition</option>
            </select>
            @error('categorie') 
                <p class="alert alert-danger">{{$errors->first('categorie')}}</p> 
            @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <h5>Poster of the event</h5>
            <input name="poster" type="file"  class="input-field @error('poster') alert-danger @enderror" value="{{$event->poster}}" >
                @error('poster') 
                    <p class="alert alert-danger">{{$errors->first('poster')}}</p> 
                @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
            <input  name="places" type="number" class="@error('places') alert-danger @enderror"  value="{{$event->places}}" >
                <label for="places" >NUMBER OF PLACES AVAILABLE</label>
                @error('places') 
                    <p class="alert alert-danger">{{$errors->first('places')}}</p> 
                @enderror
            </div>
        </div>
        <hr class="qt-spacer-s">
        <div class="row">
            <div class="input-field col s12">
                <h5>description of the event</h5>
                
                <textarea name="description" class="form-control @error('description') alert-danger @enderror"  rows="6" placeholder="description" >{{$event->description}}</textarea>
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
                <a class="qt-btn qt-btn-l  qt-btn-secondary  qt-spacer-m waves-effect waves-light " href="/events/{{$event->id}}/showClient">Cancel</a>
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
                   
                
                        
                            
                           
                            
                      
             



<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK196L3Y8Pnjsq4QG6dPohNM4TemTSEZU&callback=initAutocomplete&libraries=places&v=weekly&region=TN"
      defer
    ></script>

<script>
    
    

    // This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
function initAutocomplete() {
    var latLng = new google.maps.LatLng('{{ $event->latitude }}', '{{ $event->longitude }}');
  const map = new google.maps.Map(document.getElementById("map"), {
    center: latLng,
    zoom: 13,
    mapTypeId: "roadmap",
  });
  
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
  
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });
  let markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    // Clear out the old markers.
    markers.forEach((marker) => {
      marker.setMap(null);
      
    });
    markers = [];
    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
        
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
      lat = place.geometry.location.lat();
      lng = place.geometry.location.lng();
      document.getElementById('address-latitude').value = lat;
      document.getElementById('address-longitude').value = lng;
      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
          
        })
      );

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  

     
  
}
    </script>
 
@endsection

    
        
