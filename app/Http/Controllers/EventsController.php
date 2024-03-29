<?php

namespace App\Http\Controllers;

use App\Event;
use App\Deal;
use App\Reservation;
use App\User;
use App\Music;


use App\Mail\EventTicket;

use App\Mail\Contact;

use App\Mail\TicketEvent;

use Illuminate\Http\Request;

use App\Notifications\eventReserved;

use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Mail;


use Illuminate\Support\Str;
use Carbon\Carbon;

class EventsController extends Controller
{


    public function index()
    {
        $event = Event::latest("updated_at")->get();


        return view('events.index', [
            'events' => $event
        ]);
    }
    public function list($id)
    {
        $event = Event::find($id);
        $reservation = Reservation::where('event_id', $event->id)->latest()->get();


        return view('events.showReservations', [
            'event' => $event,
            'reservations' => $reservation
        ]);
    }

    public function indexAlll()
    {

        $event = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(2)->get();
        $deal = Deal::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        $deal1 = deal::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(2)->get();

        $music = Music::latest()->get();


        return view('welcome', [
            'events' => $event,
            'eventss' => $event1,
            'deals' => $deal,
            'dealss' => $deal1,
            'music' => $music


        ]);
    }
    public function indexAll()
    {
        $event = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        return view('eventPage', [
            'events' => $event
        ]);
    }
    public function indexHome()
    {
        $event = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        $deal = Deal::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        return view('homePage', [
            'events' => $event,
            'deals' => $deal
        ]);
    }
    public function indexPage()
    {
        $event = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->paginate(3);
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(4)->get();

        return view('event', [
            'events' => $event,
            'eventss' => $event1
        ]);
    }
    public function create(Event $event)
    {
       

        return view('events.create',compact('event'));
    }

    public function indexReserve($id)
    {
        $event = Event::find($id);
        return view('reserveEvent', [
            'event' => $event
        ]);
    }
    public function storeReserve($id)
    {
        $random = Str::random(10);
        $event = Event::find($id);
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new EventTicket($event, $random));



        return back()
            ->with('message', 'email sent');
    }
    
    public function indexReserveClient($id)
    {
        $event = Event::find($id);
        return view('reserveEventClient', [
            'event' => $event
        ]);
    }
    public function storeReserveClient($id)
    {
        $reservation = new Reservation();
        $random = Str::random(10);
        $event2 = Event::find($id)->reservation();
        $event = Event::find($id);
        //request()->validate(['email' => 'required|email']);
        // $reservation->event_id = auth()->user()->event()->id();
        request()->validate(['email' => 'required|email']);
        $reservation->email = request('email');
        //
        $event2->save($reservation);
        //$reservation->save();
        /* $validateAtributes = request()->validate([
            
        'email' => 'required|email'
    ]);
    
    //return $validateAtributes;
    
    Reservation::create($validateAtributes);*/

        Mail::to(request('email'))
            ->send(new EventTicket($event, $random));

        $event = Event::find($id)->decrement('places');

        return back()
            ->with('message', 'email sent');
    }




    public function store(Request $request)
    {



        /*$validateAtributes = request()->validate([
            
            'name' => 'required',
            'date' => 'required',
            'poster' => 'required',
            'categorie' => 'required'
        ]);
        
        //return $validateAtributes;
        
        Event::create($validateAtributes);
        $req->file('poster')->store('public');*/
        if ($request->hasFile('poster')) {
            $filenamewithext = $request->file('poster')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('poster')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('poster')->storeAs('public/images', $filenametostore);
        } else {
            $filenametostore = 'unsplash-01-1600-530.jpg';
        }


        $event = new Event();

        request()->validate([

            'name' => 'required',
            'time' => 'required',
            'date' => 'required|after:yesterday',

            'categorie' => 'required',
            'places' => 'required|numeric|min:1',
            'description' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);


        $event->name = request('name');
        $event->time = request('time');
        $event->date = request('date');
        $event->poster = $filenametostore;
        //$event->poster = request('poster');
        $event->categorie = request('categorie');
        $event->places = request('places');
        $event->description = request('description');
        $event->address = request('address');
        $event->latitude = request('latitude');
        $event->longitude = request('longitude');


        //$req->file('poster')->store('public');
        auth()->user()->event()->save($event);

        return redirect('/home/events');
    }
    /*public function imageUpload(request $req){
       $req->file('poster')->store('public');
        
    }*/
    /*public function imageUpload(Request $request){
        if($request->hasFile('poster')){
            $filenamewithext=$request->file('poster')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('poster')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('poster')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore='noimage.jpg';
        }
        
        return redirect('events/create');
         
     }*/

    public function edit($id)
    {

        $event = Event::find($id);
        return view('events.edit', [
            'event' => $event
        ]);
    }

    public function update($id, Request $request)
    {
        $event1 = Event::latest()->take(3)->get();
        $event = Event::find($id);

        if ($request->hasFile('poster')) {
            $filenamewithext = $request->file('poster')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('poster')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('poster')->storeAs('public/images', $filenametostore);
        } else {
            $filenametostore = $event->poster;
        }

        request()->validate([

            'name' => 'required',
            'time' => 'required',
            'date' => 'required|after:yesterday',
            'categorie' => 'required',
            'places' => 'required|numeric|min:1',
            'description' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);


        $event->name = request('name');
        $event->time = request('time');

        $event->date = request('date');
        $event->poster = $filenametostore;
        $event->categorie = request('categorie');
        $event->places = request('places');
        $event->description = request('description');
        $event->address = request('address');
        $event->latitude = request('latitude');
        $event->longitude = request('longitude');
        
        



        $event->save();

        return view('events.showClient', [
            'event' => $event,
            'events' => $event1
        ]);
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/home');
    }
    public function approve($id)
    {
        $event = Event::find($id);
        $event->approve = true;
        $event->save();

        return redirect('/home');
    }

    public function show($id)
    {
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(3)->get();
        $event = Event::find($id);
        return view('events.show', [
            'event' => $event,
            'events' => $event1
        ]);
    }

    public function showClient($id)
    {
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(3)->get();
        $event = Event::find($id);
        return view('events.showClient', [
            'event' => $event,
            'events' => $event1
        ]);
    }
    /* public function reserve($id){

        $event = Event::find($id);
        return view('events.reserve', [
            'event' => $event
        ]);
    }*/
    /*public function sendReservation(){

        $event = new Event();

        Notification::send($event,new eventReserved());
        return back();
    }*/
}
