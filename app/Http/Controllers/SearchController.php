<?php

namespace App\Http\Controllers;
use App\Event;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $q =  $request->q;
        
        $event = Event::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'date', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
        if (count ( $event ) > 0)
            return view ( 'events.search', [
                'events' => $event
            ] )->withDetails ( $event )->withQuery ( $q );
        else
            return view ( 'events.search', [
                'events' => $event
            ] )->withMessage ( 'No matches for your search. Sorry!' );
    }

    public function searchGuest(Request $request){
        $q =  $request->q;
        
        $event = Event::where('approve','1')->where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'categorie', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'date', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->latest()->get ();
        if (count ( $event ) > 0)
            return view ( 'searchGuest', [
                'events' => $event
            ] )->withDetails ( $event )->withQuery ( $q );
        else
            return view ( 'searchGuest', [
                'events' => $event
            ] )->withMessage ( 'No matches for your search. Sorry!' );
    }

    public function show(){
        return back();
    }
}
