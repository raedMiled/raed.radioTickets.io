<?php

namespace App\Http\Controllers;

use App\Event;
use App\Reservation;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
       
        return view('admin.dashboard');  

    }
    public function EventsIndex(){
        $event = Event::where('approve','0')->latest()->get();
    
       
    return view('admin.events', [
        'events' => $event
    ]);
    }
    public function EventShow($id){
        $event1 = Event::where('approve','0')->latest()->take(3)->get();
        $event = Event::find($id);
        return view('admin.showEvent', [
            'event' => $event,
            'events' => $event1
        ]);


    }
}
