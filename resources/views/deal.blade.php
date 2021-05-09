@extends('mainLayout')

@section('content')

<head>


    <style>
        .pht {
            height: 150px;
            margin-left: 100px
        }

        .qt-input-l,
        .qt-input-m {
            color: black;
        }

        .top {
            margin-top: -30px
        }

        .add {
            margin-left: 10px;
            font-weight: bold;

        }

        .hgt {
            height: 100%;
        }

        .ctg {

            font-weight: bold;


        }

        .tndd {
            margin-top: -10px;
        }

        .edt {

            color: #f50057;
            font-weight: bold;
            font-size: 1.4em;

        }

        option,
        select {
            font-size: 1rem;
            color: #454955;

        }

        .searchBar {
            min-width: 87%;
            max-width: 87%;
            margin: auto;
        }

        .imgsb {
            margin-top: 12px;
        }

        .sel1 {
            margin-left: 55%;

        }

        .sel2 {
            margin-left: -8%;
        }

        .lct {
            min-height: 48px;
            max-height: 48px;
            margin-left: 73px;
            margin-top: 6px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;
        }

        .ctgr {
            min-height: 48px;
            max-height: 48px;
            margin-left: 138%;
            margin-top: 6px;
            background-color: rgba(255, 255, 255, .9);
            pointer-events: none;

        }

        .sec {
            min-height: 49px;
            max-height: 49px;
            margin-left: -185%;
            margin-top: 6px;
        }

        .crd {
            min-height: 50px;
            max-height: 50px;
            margin-left: -150%;
            margin-top: 5px;
        }

        .lis {
            min-height: 50px;
            max-height: 50px;
            margin-left: -125%;
            margin-top: 5px;
        }

        /* @media screen and (max-width: 600px) {
table {width:100%;}
thead {display: none;}
tr:nth-of-type(2n) {background-color: inherit;}
tr td:first-child {background: #f0f0f0; font-weight:normal;font-size:1.3em;}
tbody td {display: block;  text-align:left;}
tbody td:before { 
    content: attr(data-th); 
    display: block;
    text-align:left;  
  font-weight: normal;
  }
  tbody td::before {
  content: attr(data-th);
  display: none;
}
}*/
        .usr {
            margin-top: -15px;
            max-height: 82px;
            min-height: 82px;
        }

        .usrl {
            margin-top: -30px;
        }

        .qt-archive-team {
            margin-top: -60px;
            margin-bottom: -60px;
        }
    </style>
</head>



<div class="qt-slickslider-container ">
    <div class="row">
        <div class="qt-slickslider qt-slickslider-multiple qt-text-shadow qt-black-bg" data-slidestoshow="3" data-variablewidth="false" data-arrows="false" data-dots="false" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="true" data-centermodemobile="true" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">
            <!--<div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg" data-variablewidth="true" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">
    -->

            @foreach($dealss as $deal1)
            <div class="qt-item">

                <div class="qt-part-archive-item qt-vertical">
                    <div class="qt-item-header">
                        <div class="qt-header-top">
                            <ul class="qt-tags">
                                <li><a href="/home/deal" class="ctg">deal</a></li>
                            </ul>
                            <div class="qt-feedback">
                                <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}" class="qt-btn qt-btn-primary ">Dès CHF {{$deal1 -> discount}} d'achat</a>
                                <img src="/imagestemplate/{{$deal1->giftCertif}}" class="rotate90" >
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

                        <a href="{{route('showClient.deal', ['deal' => $deal1->id])}}">
                            <div class="qt-header-bg" data-bgimage="/storage/images/{{$deal1 -> poster}}">
                                <img src="/storage/images/{{$deal1 -> poster}}" alt="Featured image" width="690" height="302">
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
                        <h3 class="qt-caption-med"><span style="background-color: #454955;"> deals </span></h3>
                    </td>
                    <td>
                        <a href="#!" class="qt-btn qt-btn-l ctgr">
                            <img src="/imagestemplate/icons8-category-24.png" class="imgsb">
                        </a>
                    </td>
                    <td style="width: 150px;">
                        <div class="validate qt-input-l ">
                            <select name="c" size="1" class="sel1">
                                <option value="" hidden="hidden">Categorie</option>
                                <option value="computers">computers</option>
                                <option value="books And Magazines">books and magazines</option>
                                <option value="finance">finance</option>
                                <option value="education">education</option>
                                <option value="autos">autos</option>
                                <option value="entertainment">entertainment</option>
                                <option value="clothing And Accessories">clothing and accessories</option>
                                <option value="health And Beauty">health and beauty</option>
                                <option value="home And HomeImprovement">home and home improvement</option>
                                <option value="travel And Vacations">travel and vacations</option>
                                <option value="tech And Electronics">tech and electronics</option>
                                <option value=" sporting Goods"> sporting goods</option>
                                <option value="services">services</option>
                                <option value="restaurants">restaurants</option>
                                <option value="other">other</option>

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
                            <select name="l" size="1" class="sel2">
                                <option value="" hidden="hidden">City</option>
                                <option value="Ariana">Ariana</option>
                                <option value="Beja">Beja</option>
                                <option value="Ben Arous">Ben Arous</option>
                                <option value="Bizerte">Bizerte</option>
                                <option value="Gabes">Gabes</option>
                                <option value="Gafsa">Gafsa</option>
                                <option value="Jendouba">Jendouba</option>
                                <option value="Kairouan">Kairouan</option>
                                <option value="Kasserine">Kasserine</option>
                                <option value="Kebili">Kebili</option>
                                <option value="Kef">Kef</option>
                                <option value="Mahdia">Mahdia</option>
                                <option value="Manouba">Manouba</option>
                                <option value="Medenine">Medenine</option>
                                <option value="Monastir">Monastir</option>
                                <option value="Nabeul">Nabeul</option>
                                <option value="Sfax">Sfax</option>
                                <option value="Sidi Bouzid">Sidi Bouzid</option>
                                <option value="Siliana">Siliana</option>
                                <option value="Sousse">Sousse</option>
                                <option value="Tataouine">Tataouine</option>
                                <option value="Tozeur">Tozeur</option>
                                <option value="Tunis">Tunis</option>
                                <option value="Zaghouan">Zaghouan</option>
                            </select>
                        </div>
                    </td>
                    <td style="width: 350px;">
                        <input placeholder="Search" value="" id="searchtex" type="text" class="validate qt-input-m " name="q" style="margin-left:25px;">
                    </td>
                    <td>
                        <button type="submit" value="" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light sec">
                            <img src="/imagestemplate/icons8-search-24.png">
                        </button>
                    </td>
                    <td>
                        <a href="#!" data-expandable="#" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light crd " id="myBtn1">
                            <img src="/imagestemplate/icons8-grid-view-24.png" class="imgsb">
                        </a>
                    </td>
                    <td>
                        <a href="#!" data-expandable="#" class="qt-btn qt-btn-s qt-btn-primary waves-effect waves-light lis" id="myBtn2">
                            <img src="/imagestemplate/icons8-list-24.png" class="imgsb">
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<div class="qt-container qt-vertical-padding-l  qt-archive-team" id="moree">
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
                    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}">
                        <div class="qt-header-mid qt-vc">

                        </div>
                    </a>
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
                    <h4 class="qt-ellipsis-1 qt-t">
                        <a href="{{route('showClient.deal', ['deal' => $deal->id])}}">{{$deal -> name}}</a>
                    </h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



<div class="qt-container qt-vertical-padding-m qt-archive-events" id="dotss">


    @foreach($deals as $deal)
    <a href="{{route('showClient.deal', ['deal' => $deal->id])}}">
        <div class="qt-part-archive-item qt-item-event qt-negative qt-card-s">
            <div class="qt-item-header">
                <div class="qt-header-mid qt-vc">
                    <div class="qt-vi">
                        <div class="row">
                            <div class="col s12 m2">
                                <h4 class="qt-date ">
                                    <span class="qt-month">
                                        {{ \Carbon\Carbon::parse($deal -> timeEnd)->format('h:i')}}
                                    </span>
                                    <span class="day">
                                        {{ \Carbon\Carbon::parse($deal -> dateEnd)->format('d M Y')}}
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
    </a>
    @endforeach
</div>


{{$deals->links()}}




@endsection