@extends('mainLayout')

@section('content')


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
                <h5>ADDRESS OF THE DEAL</h5>
                @error('address') 
                    <p class="alert alert-danger">{{$errors->first('address')}}</p> 
                @enderror
                <input placeholder="ADDRESS OF THE DEAL" id="pac-input"  name="address" type="text" class="@error('address') alert-danger @enderror" value="{{$deal->address}}">
                <!--<input type="text" id="address-input" name="address_address" class="form-control map-input">-->
                <input type="hidden" name="latitude" id="address-latitude" value="{{$deal->latitude}}" />
                <input type="hidden" name="longitude" id="address-longitude" value="{{$deal->longitude}}" />
                <div id="map" style="height:500px; width:712px;"></div>
            <!--<div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>-->
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
                <option value="books" @if (old('categorie') == 'books') selected="selected" @endif @if ($ss == 'books') selected="selected" @endif>books</option>
                <option value="finance" @if (old('categorie') == 'finance') selected="selected" @endif @if ($ss == 'finance') selected="selected" @endif>finance</option>
                <option value="education" @if (old('categorie') == 'education') selected="selected" @endif @if ($ss == 'education') selected="selected" @endif>education</option>
                <option value="autos" @if (old('categorie') == 'autos') selected="selected" @endif @if ($ss == 'autos') selected="selected" @endif>autos</option>
                <option value="entertainment" @if (old('categorie') == 'entertainment') selected="selected" @endif @if ($ss == 'entertainment') selected="selected" @endif>entertainment</option>
                <option value="clothing" @if (old('categorie') == 'clothing') selected="selected" @endif @if ($ss == 'clothing') selected="selected" @endif>clothing</option>
                <option value="Beauty" @if (old('categorie') == 'Beauty') selected="selected" @endif @if ($ss == 'Beauty') selected="selected" @endif>beauty</option>
                <option value="HomeImprovement" @if (old('categorie') == 'HomeImprovement') selected="selected" @endif @if ($ss == 'HomeImprovement') selected="selected" @endif>home improvement</option>
                <option value="travel" @if (old('categorie') == 'travel') selected="selected" @endif @if ($ss == 'travel') selected="selected" @endif>travel</option>
                <option value="tech" @if (old('categorie') == 'tech') selected="selected" @endif @if ($ss == 'tech') selected="selected" @endif>tech</option>
                <option value=" sport" @if (old('categorie') == 'sport') selected="selected" @endif @if ($ss == 'sport') selected="selected" @endif> sport</option>
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
            <div class="input-field col s6">
            <?php
                $sc=$deal->giftCertif;
            ?>
            <select class="@error('giftCertif') alert-danger @enderror" name="giftCertif" size="1" >
                <option value="" hidden="hidden">choose the discount</option>
                <option value="CHF10.jpg" @if (old('giftCertif') == 'CHF10.jpg') selected="selected" @endif @if ($sc == 'CHF10.jpg') selected="selected" @endif>CHF10</option>
                <option value="CHF20.jpg" @if (old('giftCertif') == 'CHF20.jpg') selected="selected" @endif @if ($sc == 'CHF20.jpg') selected="selected" @endif>CHF20</option>
                <option value="CHF50.jpg" @if (old('giftCertif') == 'CHF50.jpg') selected="selected" @endif @if ($sc == 'CHF50.jpg') selected="selected" @endif>CHF50</option>
                <option value="CHF100.jpg" @if (old('giftCertif') == 'CHF100.jpg') selected="selected" @endif @if ($sc == 'CHF100.jpg') selected="selected" @endif>CHF100</option>
                <option value="CHF200.jpg" @if (old('giftCertif') == 'CHF200.jpg') selected="selected" @endif @if ($sc == 'CHF200.jpg') selected="selected" @endif>CHF200</option>
                <option value="CHF1000.jpg" @if (old('giftCertif') == 'CHF1000.jpg') selected="selected" @endif @if ($sc == 'CHF1000.jpg') selected="selected" @endif>CHF1000</option>
                
            </select>
            @error('giftCertif') 
                <p class="alert alert-danger">{{$errors->first('giftCertif')}}</p> 
            @enderror
            </div>
        
            <div class="input-field col s6">
            <?php
                $sd=$deal->discount;
            ?>
            <select class="@error('discount') alert-danger @enderror" name="discount" size="1" >
                <option value="" hidden="hidden">choose the discount</option>
                <option value="50" @if (old('discount') == '50') selected="selected" @endif @if ($sd == '50') selected="selected" @endif>50</option>
                <option value="100" @if (old('discount') == '100') selected="selected" @endif @if ($sd == '100') selected="selected" @endif>100</option>
                <option value="150" @if (old('discount') == '150') selected="selected" @endif @if ($sd == '150') selected="selected" @endif>150</option>
                <option value="200" @if (old('discount') == '200') selected="selected" @endif @if ($sd == '200') selected="selected" @endif>200</option>
                <option value="250" @if (old('discount') == '250') selected="selected" @endif @if ($sd == '250') selected="selected" @endif>250</option>
                <option value="300" @if (old('discount') == '300') selected="selected" @endif @if ($sd == '300') selected="selected" @endif>300</option>
                <option value="350" @if (old('discount') == '350') selected="selected" @endif @if ($sd == '350') selected="selected" @endif>350</option>
                <option value="400" @if (old('discount') == '400') selected="selected" @endif @if ($sd == '400') selected="selected" @endif>400</option>
                <option value="450" @if (old('discount') == '450') selected="selected" @endif @if ($sd == '450') selected="selected" @endif>450</option>
                <option value="500" @if (old('discount') == '500') selected="selected" @endif @if ($sd == '500') selected="selected" @endif>500</option>
                <option value="550" @if (old('discount') == '550') selected="selected" @endif @if ($sd == '550') selected="selected" @endif>550</option>
                <option value="600" @if (old('discount') == '600') selected="selected" @endif @if ($sd == '600') selected="selected" @endif>600</option>
                <option value="650" @if (old('discount') == '650') selected="selected" @endif @if ($sd == '650') selected="selected" @endif>650</option>
                <option value="700" @if (old('discount') == '700') selected="selected" @endif @if ($sd == '700') selected="selected" @endif>700</option>
                <option value="750" @if (old('discount') == '750') selected="selected" @endif @if ($sd == '750') selected="selected" @endif>750</option>
                <option value="800" @if (old('discount') == '800') selected="selected" @endif @if ($sd == '800') selected="selected" @endif>800</option>
                <option value="850" @if (old('discount') == '850') selected="selected" @endif @if ($sd == '850') selected="selected" @endif>850</option>
                <option value="900" @if (old('discount') == '900') selected="selected" @endif @if ($sd == '900') selected="selected" @endif>950</option>
                <option value="950" @if (old('discount') == '950') selected="selected" @endif @if ($sd == '950') selected="selected" @endif>950</option>
                <option value="1000" @if (old('discount') == '1000') selected="selected" @endif @if ($sd == '1000') selected="selected" @endif>1000</option>                
                <option value="1500" @if (old('discount') == '1500') selected="selected" @endif @if ($sd == '1500') selected="selected" @endif>1500</option>                
                <option value="2000" @if (old('discount') == '2000') selected="selected" @endif @if ($sd == '2000') selected="selected" @endif>2000</option>                
                <option value="2500" @if (old('discount') == '2500') selected="selected" @endif @if ($sd == '2500') selected="selected" @endif>2500</option>                
                <option value="3000" @if (old('discount') == '3000') selected="selected" @endif @if ($sd == '3000') selected="selected" @endif>3000</option>                
                <option value="3500" @if (old('discount') == '3500') selected="selected" @endif @if ($sd == '3500') selected="selected" @endif>3500</option>                
                <option value="4000" @if (old('discount') == '4000') selected="selected" @endif @if ($sd == '4000') selected="selected" @endif>4000</option>                
                <option value="4500" @if (old('discount') == '4500') selected="selected" @endif @if ($sd == '4500') selected="selected" @endif>4500</option>                
                <option value="5000" @if (old('discount') == '5000') selected="selected" @endif @if ($sd == '5000') selected="selected" @endif>5000</option>                
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
    var latLng = new google.maps.LatLng('{{ $deal->latitude }}', '{{ $deal->longitude }}');
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