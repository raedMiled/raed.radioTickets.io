<?php

namespace App\Http\Controllers;

use App\Event;

use App\Mail\EventTicket;

use App\Mail\TicketEvent;

use Illuminate\Http\Request;

use App\Notifications\eventReserved;

use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class EventsController extends Controller
{


    public function index(){
        $event = Event::latest()->get();
    
       
    return view('events.index', [
        'events' => $event
    ]);
    }
    public function indexAll(){
        $event = Event::latest("updated_at")->get();
        return view('eventPage', [
            'events' => $event
        ]);
    }
    public function indexHome(){
        $event = Event::latest("updated_at")->get();
        return view('homePage', [
            'events' => $event
        ]);
    }
    public function indexPage(){
        $event = Event::latest("updated_at")->get();
        return view('event', [
            'events' => $event
        ]);
    }
    public function create(){
        
        
        return view('events.create');


    }
   
    public function indexReserve($id){
        $event = Event::find($id);
        return view('reserveEvent', [
            'event' => $event
        ]);

    }
    public function storeReserve($id){
        $random = Str::random(10);
        $event = Event::find($id);
       request()->validate(['email' => 'required|email']);

       Mail::to(request('email'))
            ->send(new EventTicket($event,$random));

     

            return back()
            ->with('message','email sent');

    }

    public function indexReserveClient($id){
        $event = Event::find($id);
        return view('reserveEventClient', [
            'event' => $event
        ]);

    }
    public function storeReserveClient($id){
        $random = Str::random(10);
        $event = Event::find($id);
       request()->validate(['email' => 'required|email']);

       Mail::to(request('email'))
            ->send(new EventTicket($event,$random));

     

            return back()
            ->with('message','email sent');

    }

    public function indexAlll(){
        $data = [
            'intent' => auth()->user()->createSetupIntent()
        ];
        
        return view('welcome')->with($data);

    }
    

    public function store(Request $request){
        
        
        
        /*$validateAtributes = request()->validate([
            
            'name' => 'required',
            'date' => 'required',
            'poster' => 'required',
            'categorie' => 'required'
        ]);
        
        //return $validateAtributes;
        
        Event::create($validateAtributes);
        $req->file('poster')->store('public');*/
        if($request->hasFile('poster')){
            $filenamewithext=$request->file('poster')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('poster')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('poster')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore='noimage.jpg';
        }
        

        $event = new Event();

        request()->validate([
            
            'name' => 'required',
            'time' => 'required',
            'date' => 'required|after:yesterday',
            'poster' => 'required',
            'categorie' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);
        

        $event->name = request('name');
        $event->time = request('time');
        $event->date = request('date');
        $event->poster=$filenametostore;
        //$event->poster = request('poster');
        $event->categorie = request('categorie');
        $event->description = request('description');
        $event->address = request('address');


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

     public function edit($id){
        
        $event = Event::find($id);
        return view('events.edit', [
            'event' => $event
        ]);


    }
    
    public function update($id,Request $request){
        $event1 = Event::latest()->take(3)->get();
        $event = Event::find($id);

        if($request->hasFile('poster')){
            $filenamewithext=$request->file('poster')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('poster')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('poster')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore=$event->poster;
        }

        request()->validate([
            
            'name' => 'required',
            'time' => 'required',
            
            'date' => 'required|after:yesterday',
            
            'categorie' => 'required',
            
            'description' => 'required',
            'address' => 'required'
        ]);
        

        $event->name = request('name');
        $event->time = request('time');

        $event->date = request('date');
        $event->poster=$filenametostore;
        $event->categorie = request('categorie');
        $event->description = request('description');
        $event->address = request('address');



        $event->save();
        
        return view('events.showClient', [
            'event' => $event,
            'events' => $event1
        ]);


    }

    public function delete($id)
    {
        $event= Event::find($id);
        $event->delete();
       
        return redirect('/home');
    }

    public function show($id){
        $event1 = Event::latest("updated_at")->take(3)->get();
        $event = Event::find($id);
        return view('events.show', [
            'event' => $event,
            'events' => $event1
        ]);


    }

    public function showClient($id){
        $event1 = Event::latest("updated_at")->take(3)->get();
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
