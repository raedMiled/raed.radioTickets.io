@extends('mainLayout')

@section('content')
<div class="qt-slickslider-container ">
<div class="row">
<div class="qt-slickslider qt-slickslider-multiple qt-text-shadow qt-black-bg" data-slidestoshow="3" data-variablewidth="false" data-arrows="false" data-dots="false" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="true" data-centermodemobile="true" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">
<!--<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">
    -->
    @foreach($eventss as $event1)
        <div class="qt-item">

            <div class="qt-part-archive-item qt-vertical">
                <div class="qt-item-header">
                    <div class="qt-header-top">
                        
                    <div class="evt">
                            <ul class="qt-tags cctg">
                                <li><a  href="/home/event " class="ctg">event</a></li>
                            </ul>                        
                        </div>
                       
                        <div class="qt-feedback">
                            <p class="edt ">{{ \Carbon\Carbon::parse($event1->date)->format('d M Y')}}</p>
                        </div>
                       
                       
                    </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">
                            <h3 class="qt-title">
                                <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-text-shadow">
                                    {{$event1->name}}
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="qt-header-bottom">
                    <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-plus"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$event1->address}}</p>
                                                </div>
                        <a href="{{route('showClient.event', ['event' => $event1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                    </div>
                    <a href="{{route('showClient.event', ['event' => $event1->id])}}">
                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$event1 -> poster}}">
                        <img src="/storage/images/{{$event1 -> poster}}" alt="Featured image" width="690" height="302">
                    </div>
                    </a>
                </div>
            </div>

        </div>
        @endforeach

        


</div>
</div>
</div>
         

<hr class="qt-spacer-m"> 
                
<div id="qtsearchbar" class="qt-searchbar qt-content-primary searchBar">
    <div class="qt-expandable-inner">
    
        <form method="POST" action="{{ route('search.event') }}" class="qt-inline-form">
            @csrf
            
            <table class="responsive-table">
                <tr>
                    
                    <td>
                        <h3 class="qt-caption-med" ><span style="background-color: #454955;">events</span></h3>
                    </td>
                    <td >
                        <a href="#!" class="qt-btn qt-btn-l ctgr">
                            <img src="/imagestemplate/icons8-category-24.png" class="imgsb">
                        </a>                
                    </td>
                    <td style="width: 150px;">
                        <div class="validate qt-input-l ">   
                            <select name="c"  size="1"class="sel1">
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
                        <a href="#!" class="qt-btn qt-btn-l lct">
                            <img src="/imagestemplate/icons8-location-24.png" class="imgsb">
                        </a>                
                    </td>
                    
                    <td style="width: 150px;">
                        <div class="validate qt-input-l">   
                            <select name="l"  size="1"class="sel2">
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
                        <button type="submit" value="" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light sec">
                            <img src="/imagestemplate/icons8-search-24.png" >
                        </button>                
                    </td>
                    <td >
                        <a href="#!" data-expandable="#" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light crd "id="myBtn1">
                            <img src="/imagestemplate/icons8-grid-view-24.png" class="imgsb">
                        </a>                
                    </td>
                    <td >
                        <a href="#!" data-expandable="#" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light lis"id="myBtn2">
                            <img src="/imagestemplate/icons8-list-24.png" class="imgsb">
                        </a>                
                    </td> 
                </tr>
            </table>
        </form>
    </div>
</div>
                

                       
                   
                    
                        <div class="qt-container qt-vertical-padding-m qt-archive-events" id="dotss">
                            

                            @foreach($events as $event)
                            <a href="{{route('showClient.event', ['event' => $event->id])}}">
                            <div class="qt-part-archive-item qt-item-event qt-negative qt-card-s" >
                                <div class="qt-item-header">
                                    <div class="qt-header-mid qt-vc">
                                        <div class="qt-vi">
                                            <div class="row">
                                                <div class="col s12 m2">
                                                    <h4 class="qt-date ">
                                                            <span class="qt-month">
                                                                {{ \Carbon\Carbon::parse($event->time)->format('h:i')}}
                                                            </span>
                                                            <span class="day">
                                                                {{ \Carbon\Carbon::parse($event->date)->format('d M Y')}}
                                                            </span>
                                                    </h4>
                                                </div>
                                                <div class="col s12 m8 qt-titles">
                                                    <div class="qt-vc">
                                                        <div class="qt-vi">
                                                            <h5 class="qt-spacer-xs">{{$event->address}}</h5>
                                                            <h3 class="qt-spacer-xs qt-ellipsis qt-t qt-title">
                                                                <a href="{{route('showClient.event', ['event' => $event->id])}}" class="qt-text-shadow">{{$event -> name}}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m2">
                                                    <a href="{{route('showClient.event', ['event' => $event->id])}}" class="qt-btn qt-btn-primary bottom right"><i class="dripicons-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$event -> poster}}">
                                        <img src="/storage/images/{{$event -> poster}}" alt="Featured image" width="690" height="302">
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach
                        </div>
                       
                        

                        <div class="qt-container qt-vertical-padding-l  qt-archive-team" id="moree">
                            <div class="row">
                            @foreach($events as $event)


                                <div class="col s12 m6 l4 ">
                                    <div class="qt-part-archive-item qt-item-chart ">
                                        <div class="qt-item-header">
                                            <div class="qt-header-top">
                                                <div class="evt">
                                                    <ul class="qt-tags cctg">
                                                        <li><a href="{{route('showClient.event', ['event' => $event->id])}}" class="ctg">{{$event->categorie}}</a></li>
                                                    </ul>
                                                </div>
                                                <div class="qt-feedback">
                                                    <p class="edt ">{{ \Carbon\Carbon::parse($event->date)->format('d M Y')}}</p>
                                                </div>
                                            </div>
                                            <a href="{{route('showClient.event', ['event' => $event->id])}}">
                                            <div class="qt-header-mid qt-vc">
                                               
                                            </div>
                                            </a>
                                            <div class="qt-header-bottom">
                                                <a href="{{route('showClient.event', ['event' => $event->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-plus"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$event->address}}</p>
                                                </div>
                                            </div>
                                            <div class="qt-header-bg" data-bgimage="/storage/images/{{$event -> poster}}">
                                                <img src="/storage/images/{{$event -> poster}}" alt="Featured image" width="690" height="690">
                                            </div>
                                            
                                        </div>
                                        <div class="qt-item-content-s qt-card">
                                                <h4 class="qt-ellipsis-1 qt-t">
                                                    <a href="{{route('showClient.event', ['event' => $event->id])}}">{{$event -> name}}</a>
                                                </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{$events->links()}}
                
                            
                      
             


@endsection