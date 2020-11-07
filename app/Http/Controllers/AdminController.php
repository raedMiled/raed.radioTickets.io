<?php

namespace App\Http\Controllers;

use App\Event;
use App\Deal;
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
    public function DealsIndex(){
        $deal = Deal::where('approve','0')->latest()->get();
    
       
    return view('admin.deals', [
        'deals' => $deal
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
    public function DealShow($id){
        $deal1 = Deal::where('approve','0')->latest()->take(3)->get();
        $deal = Deal::find($id);
        return view('admin.showDeal', [
            'deal' => $deal,
            'deals' => $deal1
        ]);


    }
    public function indexUser(){
        
        $user = User::where('stripe_id','!=',null)->where('email','!=','raedchelsea@gmail.com')->latest()->get();
        
        return view('admin.users', [
            'users' => $user
        ]);

    }
    public function approveEvent($id)
    {
        $event= Event::find($id);
        $event->approve = true;
        $event->save();
       
        return redirect('/home');
    }
    public function approveDeal($id)
    {
        $deal= Deal::find($id);
        $deal->approve = true;
        $deal->save();
       
        return redirect('/home');
    }
}
