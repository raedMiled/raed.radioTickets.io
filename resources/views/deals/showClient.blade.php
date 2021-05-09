@extends('mainLayout')

@section('content')
<style>
    .qt-ellipsis-1.qt-t{line-height:1.05em;height:1.8em}
</style>



<div class="qt-part-event-featured qt-card qt-negative qt-vertical-padding-m">
    <div class="qt-event-featured-content">

        <h3 class="qt-caption ">{{$deal->name}}</h3>
        <div class="qt-countdown-container">
            <div id="countdown" class="ClassyCountdownDemo qt-countdown" data-end="{{ \Carbon\Carbon::parse($deal->dateEnd)->format('d M Y')}}  {{ \Carbon\Carbon::parse($deal->timeEnd)->format('h:i')}}"></div>
        </div>
       <!-- <div id="qtsearchbar" >
            <div class="qt-expandable-inner">
    
            <form method="POST" action="{{ route('search.event') }}" class="qt-inline-form">
            @csrf
            
            <table class="responsive-table">
                <tr>
                    
                    
                    <td >
                        <a href="#!" class="qt-btn qt-btn-l ctgr1">
                            <img src="/imagestemplate/icons8-category-24.png" class="imgsb">
                        </a>                
                    </td>
                    <td style="width: 150px;">
                        <div class="validate qt-input-l ">   
                            <select name="c"  size="1"class="sel11">
                                <option value="" hidden="hidden">Categorie</option>
                                <option value="party">party</option>
                                <option value="courses" >courses</option>
                                <option value="theater" >theater</option>
                                <option value="cinema" >cinema</option>
                                <option value="concert">concert</option>
                                <option value="tournament" >tournament</option>
                                <option value="exhibition" >exhibition</option>
                            </select>
                        </div>
                    </td>
                   
                    <td style="width: 100px;">
                        <a href="#!" class="qt-btn qt-btn-l lct1">
                            <img src="/imagestemplate/icons8-location-24.png" class="imgsb">
                        </a>                
                    </td>
                    
                    <td style="width: 150px;">
                        <div class="validate qt-input-l">   
                            <select name="l"  size="1"class="sel22">
                                <option value="" hidden="hidden">City</option>
                                <option value="Ariana">Ariana</option>
                                <option value="Beja" >Beja</option>
                                <option value="Ben Arous" >Ben Arous</option>
                                <option value="Bizerte" >Bizerte</option>
                                <option value="Gabes">Gabes</option>
                                <option value="Gafsa" >Gafsa</option>
                                <option value="Jendouba" >Jendouba</option>
                                <option value="Kairouan">Kairouan</option>
                                <option value="Kasserine" >Kasserine</option>
                                <option value="Kebili" >Kebili</option>
                                <option value="Kef" >Kef</option>
                                <option value="Mahdia">Mahdia</option>
                                <option value="Manouba" >Manouba</option>
                                <option value="Medenine" >Medenine</option>
                                <option value="Monastir">Monastir</option>
                                <option value="Nabeul" >Nabeul</option>
                                <option value="Sfax" >Sfax</option>
                                <option value="Sidi Bouzid" >Sidi Bouzid</option>
                                <option value="Siliana">Siliana</option>
                                <option value="Sousse" >Sousse</option>
                                <option value="Tataouine" >Tataouine</option>
                                <option value="Tozeur">Tozeur</option>
                                <option value="Tunis" >Tunis</option>
                                <option value="Zaghouan" >Zaghouan</option>
                            </select>
                        </div>
                    </td>
                    <td style="width: 350px;">
                        <input placeholder="Search" value="" id="searchtex" type="text" class="validate qt-input-m" name="q">
                    </td>
                    <td >
                        <button type="submit" value="" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light sec1">
                            <img src="/imagestemplate/icons8-search-24.png" >
                        </button>                
                    </td>
                    
                </tr>
            </table>
            </form>
            </div>
        </div>-->
    </div>
    <div class="qt-countdown-background"style="background-color: #454955;">
        <div class="qt-header-bg" data-bgimage="/imagestemplate/large-1170-512">
            <img src="/imagestemplate/large-1170-512" alt="Featured image" width="690" height="302">
        </div>
    </div>
</div>        




<div class="qt-container qt-vertical-padding-m">
    <div class="row">
    <div class="col s12 m12 l1 qt-pushpin-container">


<ul class="qt-sharepage qt-content-primary">



</ul>


<hr class="qt-spacer-s">
</div>
        <div class="col s12 m12 l8 block1">
            <div class="qt-the-content">
                <table class="table.responsive-table qt-eventtable ">
                <tbody>
                    <tr> 
                    <td style="border: none;">
                        <a href="/imagestemplate/{{$deal->giftCertif}}" target="_blank">
                            <img src="/imagestemplate/{{$deal->giftCertif}}"   class=" ime1 ">
                        </a>
                        <a href="/storage/images/{{$deal->poster}}" target="_blank">
                            <img src="/storage/images/{{$deal->poster}}"  class=" ime2 ">
                        </a>
                    </td>
                    <td style="border: none;">
                        <div class="qt-widget block2" >

                            <h5 class="qt-caption-small "><span>Description</span></h5>
                            <!--{{$deal->description}}-->
                                {{substr(strip_tags($deal->description),0,100)}}
                                @if (strlen($deal->description) > 100)
                                    <span id="dots">...</span>
                                    <span id="more">{{substr($deal->description,100)}}</span>
                                    <button onclick="myFunction()" id="myBtn" class="read-more">Read more</button>
                                @endif 
                                <div class="col s12 m12 l1 qt-pushpin-container block2">
                                    <table   style="margin-top: 35px;margin-left:-45px;">
                                        <tr>
                                            <td style="border: none;" >
                                                <ul class="qt-sharepage qt-content-primary">
                                                    <li class="hide-on-med-and-down">
                                                        <i class="qticon-share qt-shareicon qt-content-primary-dark"></i>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td style="border: none;">
                                                <ul class="qt-sharepage qt-content-primary" style="margin-left: 2px;">
                                                    <li>
                                                        <a class="qt-popupwindow qt-sharelink  qt-shareicon qt-content-primary" data-sharetype="facebook" data-name="Share" data-width="600" data-height="500" target="_blank" href="">
                                                            <i class="qticon-facebook"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td style="border: none;">
                                                <ul class="qt-sharepage qt-content-primary"style="margin-left: 2px;">
                                                    <li>
                                                        <a class="qt-popupwindow qt-sharelink  qt-shareicon qt-content-primary" data-sharetype="twitter" data-name="Share" data-width="600" data-height="500" target="_blank" href="">
                                                            <i class="qticon-twitter"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
 

                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>


            </div>
            <div class="qt-the-content">
            <table  >
                    <tr>
                        <td style="border: none;">
                            <table class="table qt-eventtable tdta block4">
                                <tbody class="block3">
                                    <tr>
                                        <th>Date end of the deal:</th>
                                        <td>{{ \Carbon\Carbon::parse($deal->dateEnd)->format('d M Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Time end of the deal:</th>
                                        <td> {{ \Carbon\Carbon::parse($deal->timeEnd)->format('H:i')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address of the deal:</th>
                                        <td> {{$deal->address}}</td>
                                    </tr>
                       
                                </tbody>
                            </table>
                        </td>
                        <td style="border: none;">
                            <div class="qt-content tdtab">
                            @can('show-deal', $deal)
                                <table style="margin-top:20px;">
                                    <tr>       
                                        <td style="border: none;">
                                            <a class="qt-btn qt-btn-l qt-btn-primary  waves-effect waves-light" href="{{route('list.deal', ['deal' => $deal->id])}}" style=" min-width:13rem;max-width:13rem;text-align:center;min-height:3.5rem;max-height:3.5rem;">reservation list</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: none;">
                                            <a class="qt-btn qt-btn-l qt-btn-primary  waves-effect waves-light" href="{{route('edit.deal', ['deal' => $deal->id])}}"style=" min-width:13rem;max-width:13rem;text-align:center;margin-top:-25px;min-height:3.5rem;max-height:3.5rem;">update deal</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: none;">
                                            <form method="POST" id="delete-deal" action="{{route('delete.deal',  ['deal' => $deal->id])}}">
                                            @csrf
                                            @method('DELETE')
                                                <button  type="submit" class="qt-btn qt-btn-l  qt-btn-primary  waves-effect waves-light" onclick="return confirm('Sure Want Delete?')" style=" min-width:13rem;max-width:13rem;margin-top:-25px;min-height:3.5rem;max-height:3.5rem;">delete deal</button>
                                            </form>

                                            <!-- <button class="qt-btn qt-btn-l  qt-btn-secondary  qt-spacer-m waves-effect waves-light remove-event" data-id="{{ $deal->id }}" data-action="{{route('delete.deal',  ['deal' => $deal->id])}}"> Delete Event</button>-->
                                        </td>
                                    </tr>
                                </table> 

                      
                    
                            @endcan
                            @can('show-reservation-button-deal', $deal)
                    
                                <form method="POST" action="{{route('reserveClient.deal', ['deal' => $deal->id])}}">
                                @csrf
                                @method('GET')
                                    <button  type="submit" class=" qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" style=" min-width:13rem;max-width:13rem;">get resrvation</button>
                            
                                </form>
                    
                            @endcan    
                            </div>
                        </td>
                                    
                    </tr>
                </table>
            </div>

        </div>




        <div class="qt-sidebar col s12 m12 l3">

            <div class="qt-widgets qt-sidebar-main qt-text-secondary row ">
                <div class="col s12 m3 l12 ">

                    <h5 class="qt-caption-small"><span>Place</span></h5>


                    <div id="map" style="height:285px; width:275px;"></div>
                    <hr class="qt-spacer-s">
                </div>
                


                <div class="col s12 m3 l12 ">
                    <div class="qt-widget ">
                            <h5 class="qt-caption-small block5"><span>Newest deals</span></h5>
                            <ul class="qt-widget-upcoming">
                                @foreach($deals as $deal1)
                                <li class="qt-card-s paper">
                                    <h5 class="qt-ellipsis-1 qt-t">
                                        <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}">{{$deal1 -> name}}</a>
                                    </h5>
                                    <p>
                        
                                        {{ \Carbon\Carbon::parse($deal1 -> date)->format('d M Y')}}
                                    </p>
                                    
                                                <img src="/storage/images/{{$deal1 -> poster}}"  class=" imee ">
                                                                            
                                @endforeach
                            </ul>
                    </div>
                </div>


    </div>

</div>
</div>
</div>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK196L3Y8Pnjsq4QG6dPohNM4TemTSEZU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

@if($deal->latitude && $deal->longitude)

<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
 
 // var i='{{$deal->name}} ';
 // var j=' {{$deal->categorie}} ';
 //function longitude(){    var i=10.8113;     return(i);}
 // const uluru = { lat: i, lng: j  };
  var latLng = new google.maps.LatLng('{{ $deal->latitude }}', '{{ $deal->longitude }}');
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: latLng,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: latLng,
    map: map,
  });
}
</script>

@endif
@endsection



    
        
