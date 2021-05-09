@extends('mainLayout')

@section('content')
<div class="qt-slickslider-container ">
    <div class="row">
        <div class="qt-slickslider qt-slickslider-multiple qt-text-shadow qt-black-bg" data-slidestoshow="3" data-variablewidth="false" data-arrows="false" data-dots="false" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="true" data-centermodemobile="true" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">
            <!--<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">
    -->
            <!-- @foreach($eventss as $event1)
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
                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$event1 -> poster}}">
                        <img src="/storage/images/{{$event1 -> poster}}" alt="Featured image" width="690" height="302">
                    </div>
                </div>
            </div>

        </div>
        @endforeach-->

            @foreach($dealss as $deal1)
            <div class="qt-item">

                <div class="qt-part-archive-item qt-vertical">
                    <div class="qt-item-header">
                        <div class="qt-header-top">
                            <ul class="qt-tags">
                                <li><a href="/home/deal" class="ctg">deal</a></li>
                            </ul>
                            <div class="qt-feedback">
                                <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-btn qt-btn-primary ">{{$deal1 -> discount}}</a>
                            </div>
                        </div>
                        <div class="qt-header-mid qt-vc">
                            <div class="qt-vi">
                                <h3 class="qt-title">
                                    <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-text-shadow">
                                        {{$deal1->name}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="qt-header-bottom">
                            <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                            <div class="qt-header">
                                <p class="add">{{$deal1->address}}</p>
                            </div>
                        </div>


                        <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal1 -> poster}}">
                            <img src="/storage/images/{{$deal1 -> poster}}" alt="Featured image" width="690" height="302">
                        </div>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </div>
</div>

<!--     

<hr class="qt-spacer-s"> 
                
                

                   
<h3 class="qt-caption-med"><span>events</span></h3>
                        <div class="qt-container qt-vertical-padding-m qt-archive-events">
                            

                            @foreach($events as $event)
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
                            @endforeach
                        </div>  

                        
<div id="qtsearchbar" class="qt-searchbar qt-content-primary searchBar">
    <div class="qt-expandable-inner">
    
        <form method="POST" action="{{ route('search.event') }}" class="qt-inline-form">
            @csrf
            
            <table>
                <tr>
                    
                    <td>
                        <h3 class="qt-caption-med" ><span style="background-color: #454955;">deals</span></h3>
                    </td>
                    <td >
                        <input placeholder="Search" value="" id="searchtex" type="text" class="validate qt-input-m" name="q">
                    </td>
                    <td style="width:6%;">
                        <button type="submit" value="" class="qt-btn qt-btn-s qt-btn-primary sec">
                            <img src="/imagestemplate/icons8-search-24.png" >
                        </button>                
                    </td>
                    <td style="width: 180px;">
                        <div class="validate qt-input-l ">   
                            <select name="c"  size="1"class="sel">
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
                    
                    <td style="width: 180px;">
                        <div class="validate qt-input-l">   
                            <select   size="1"class="sel">
                                <option value="" hidden="hidden">City</option>
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
                    <td style="width:6%">
                        <a href="#!" class="qt-btn qt-btn-s qt-btn-primary crd"id="myBtn1">
                            <img src="/imagestemplate/icons8-grid-view-24.png" class="imgsb">
                        </a>                
                    </td>
                    <td style="width:6%">
                        <a href="#!" class="qt-btn qt-btn-s qt-btn-primary lis"id="myBtn2">
                            <img src="/imagestemplate/icons8-list-24.png" class="imgsb">
                        </a>                
                    </td> 
                </tr>
            </table>
        </form>
    </div>
</div>
                        <div class="qt-container qt-vertical-padding-m qt-archive-events"id="dots">
                            

                            @foreach($deals as $deal)
                            <div class="qt-part-archive-item qt-item-event qt-negative qt-card-s" >
                                <div class="qt-item-header">
                                    <div class="qt-header-mid qt-vc">
                                        <div class="qt-vi">
                                            <div class="row">
                                                <div class="col s12 m2">
                                                    <h4 class="qt-date ">
                                                            <span class="qt-month">
                                                                {{$deal -> timeEnd}}
                                                            </span>
                                                            <span class="day">
                                                                {{$deal -> dateEnd}}
                                                            </span>
                                                    </h4>
                                                </div>
                                                <div class="col s12 m8 qt-titles">
                                                    <div class="qt-vc">
                                                        <div class="qt-vi">
                                                            <h5 class="qt-spacer-xs">{{$deal->address}}</h5>
                                                            <h3 class="qt-spacer-xs qt-ellipsis qt-t qt-title">
                                                                <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-text-shadow">{{$deal -> name}}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m2">
                                                    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary top right">{{$deal -> discount}}</a>
                                                </div>
                                                <div class="col s12 m2">
                                                    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary bottom right"><i class="dripicons-plus"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal -> poster}}">
                                        <img src="/storage/images/{{$deal -> poster}}" alt="Featured image" width="690" height="302">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>  



                    
                        <div class="qt-container qt-vertical-padding-l  qt-archive-team"id="more">
                            <div class="row">
                            @foreach($deals as $deal)


                                <div class="col s12 m6 l4 ">
                                    <div class="qt-part-archive-item qt-item-chart ">
                                        <div class="qt-item-header">
                                            <div class="qt-header-top">
                                                <ul class="qt-tags">
                                                    <li><a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="ctg">{{$deal->categorie}}</a></li>
                                                </ul>
                                                <div class="qt-feedback">
                                                <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary ">{{$deal -> discount}}</a>
                                                </div>
                                            </div>
                                            <div class="qt-header-mid qt-vc">
                                               
                                            </div>
                                            <div class="qt-header-bottom">
                                                <a href="{{route('showClient.deal', ['deal' => $deal->id])}}" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-plus"></i></a>
                                                <div class="qt-header">
                                                    <p class="add">{{$deal->address}}</p>
                                                </div>
                                            </div>
                                            <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal -> poster}}">
                                                <img src="/storage/images/{{$deal -> poster}}" alt="Featured image" width="690" height="690">
                                            </div>
                                            
                                        </div>
                                        <div class="qt-item-content-s qt-card">
                                                <h4 class="qt-ellipsis-2 qt-t">
                                                    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}">{{$deal -> name}}</a>
                                                </h4>
                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                       
                      
    -->
<div class="qt-container qt-vertical-padding-m qt-archive-events">
    <p>Mes parents me disent d éteindre la télé pour aller faire un tour en vélo, mes potes me proposent un foot le samedi après-midi... Mais pourquoi tout le monde veut-il faire du sport ?

        Quand tu fais du sport, tu te muscles, tu deviens plus endurant aux efforts (les escaliers te semblent moins hauts) et tu te sens en meilleure forme. Figure-toi que le sport te protège contre certaines maladies comme le diabète, l obésité, et même les maux de dos.

        Les activités sportives sont aussi des occasions de rencontrer des gens en dehors de l école, du travail et de la famille. Pratiquer un sport, nous apprend à gérer la rivalité avec les autres, à ne pas se sentir démoli quand on perd et à trouver sa place au sein d une équipe. </p>
</div>

@endsection