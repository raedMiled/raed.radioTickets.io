<?php

namespace App\Http\Controllers;
use App\Event;
use App\Deal;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $q =  $request->q;
        $c = $request->c;
        $l = $request->l;
        
        $deal1 = deal::where('approve', '1')->where('places', '>', '0')->latest()->take(2)->get();
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest()->take(4)->get();

        
        $event = Event::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('categorie','LIKE',$c)
                            ->where('address','LIKE','%' . $l . '%')
                            ->orWhere ( 'date', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
        $deal = Deal::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'dateEnd', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
        if (count ( $event ) > 0 || count ( $deal ) > 0 )
            return view ( 'events.search', [
                'events' => $event,
                'deals' => $deal,
                'eventss' => $event1,
                'dealss' => $deal1,
            ] )->withDetails ( $event )->withDetails ( $deal )->withQuery ( $q );
        else
            return view ( 'events.search', [
                'events' => $event,
                'deals' => $deal,
                'eventss' => $event1,
                'dealss' => $deal1,
            ] )->withMessage ( 'No matches for your search. Sorry!' );
    }

    public function searchGuest(Request $request){
        $q =  $request->q;
        
        $event = Event::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'date', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
                            $deal = Deal::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'dateEnd', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
        if (count ( $event ) > 0 || count ( $deal ) > 0 )
            return view ( 'searchGuest', [
                'events' => $event,
                'deals' => $deal
            ] )->withDetails ( $event )->withDetails ( $deal )->withQuery ( $q );
        else
            return view ( 'searchGuest', [
                'events' => $event,
                'deals' => $deal
            ] )->withMessage ( 'No matches for your search. Sorry!' );
        
    }

    public function show(){
        return back();
    }
}
