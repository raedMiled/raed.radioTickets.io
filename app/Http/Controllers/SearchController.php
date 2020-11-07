<?php

namespace App\Http\Controllers;
use App\Event;
use App\Deal;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
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
            return view ( 'events.search', [
                'events' => $event,
                'deals' => $deal
            ] )->withDetails ( $event )->withDetails ( $deal )->withQuery ( $q );
        else
            return view ( 'events.search', [
                'events' => $event,
                'deals' => $deal
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
