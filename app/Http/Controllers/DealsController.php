<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;

class DealsController extends Controller
{
    function show ($id) {

        $deal = Deal::where('id', $id)->firstOrFail();
        

    //    $deals = [
    //        'premier-deal' => 'mon premier deal',
    //        'deuxieme-deal' => 'mon deuxieme deal'
     //   ];
    
       // if(! $deal){
        //    abort(404);
       // }
    
    
    
        return view('deals',[
            'deal' => $deal
        ] );
    }
}
