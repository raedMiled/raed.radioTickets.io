<?php

namespace App\Http\Controllers;

use App\Deal;
use App\User;
use App\ReservationDeal;

use App\Mail\DealTicket;


use Illuminate\Http\Request;

use App\Notifications\eventReserved;

use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class DealsController extends Controller
{
    public function create(){
        
        
        return view('deals.create');


    }
    public function store(Request $request){
        
        
        
       
        if($request->hasFile('poster')){
            $filenamewithext=$request->file('poster')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('poster')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('poster')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore='noimage.jpg';
        }
        

        $deal = new Deal();

        request()->validate([
            
            'name' => 'required',
            'timeEnd' => 'required',
            'dateEnd' => 'required|after:yesterday',
            'poster' => 'required',
            'categorie' => 'required',
            'discount' => 'required',
            'places' => 'required|numeric|min:1',
            'description' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'giftCertif' => 'required'
        ]);
        

        $deal->name = request('name');
        $deal->timeEnd = request('timeEnd');
        $deal->dateEnd = request('dateEnd');
        $deal->poster=$filenametostore;
        $deal->discount = request('discount');
        $deal->categorie = request('categorie');
        $deal->places = request('places');
        $deal->description = request('description');
        $deal->address = request('address');
        $deal->latitude = request('latitude');
        $deal->longitude = request('longitude');
        $deal->giftCertif = request('giftCertif');


        auth()->user()->deal()->save($deal);
        
        return redirect('/home/deals');
    }
    public function showClient($id){
        $deal1 = Deal::where('approve','1')->where('places','>','0')->latest("updated_at")->take(3)->get();
        $deal = Deal::find($id);
        return view('deals.showClient', [
            'deal' => $deal,
            'deals' => $deal1
        ]);


    }
    public function show($id){
        $deal1 = Deal::where('approve','1')->where('places','>','0')->latest("updated_at")->take(3)->get();
        $deal = Deal::find($id);
        return view('deals.show', [
            'deal' => $deal,
            'deals' => $deal1
        ]);


    }
    public function edit($id){
        
        $deal = Deal::find($id);
        return view('deals.edit', [
            'deal' => $deal
        ]);


    }
    public function update($id,Request $request){
        $deal1 = Deal::latest()->take(3)->get();
        $deal = Deal::find($id);

        if($request->hasFile('poster')){
            $filenamewithext=$request->file('poster')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('poster')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('poster')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore=$deal->poster;
        }

        request()->validate([
            
            'name' => 'required',
            'timeEnd' => 'required',
            
            'dateEnd' => 'required|after:yesterday',
            
            'categorie' => 'required',
            'discount' => 'required',
            'places' => 'required|numeric|min:1',
            'description' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'giftCertif' => 'required'
        ]);
        

        $deal->name = request('name');
        $deal->timeEnd = request('timeEnd');

        $deal->dateEnd = request('dateEnd');
        $deal->poster=$filenametostore;
        $deal->discount = request('discount');
        $deal->categorie = request('categorie');
        $deal->places = request('places');
        $deal->description = request('description');
        $deal->address = request('address');
        $deal->latitude = request('latitude');
        $deal->longitude = request('longitude');
        $deal->giftCertif = request('giftCertif');


        $deal->save();
        
        return view('deals.showClient', [
            'deal' => $deal,
            'deals' => $deal1
        ]);


    }
    public function list($id){
        $deal = Deal::find($id);
        $reservation = ReservationDeal::where('deal_id',$deal->id)->latest()->get();
        
        
        return view('deals.showDealReservations', [
            'deal' => $deal,
            'reservations' => $reservation
        ]);

    }
    public function delete($id)
    {
        $deal= Deal::find($id);
        $deal->delete();
       
        return redirect('/home');
    }
   
    public function indexReserveClient($id){
        $deal = Deal::find($id);
        return view('reserveDealClient', [
            'deal' => $deal
        ]);

    }
    public function storeReserveClient($id){
        $reservation = new ReservationDeal();
        $random = Str::random(10);
        $deal2 = Deal::find($id)->reservationDeal();
        $deal = Deal::find($id);
        
       request()->validate(['email' => 'required|email']);
       $reservation->email = request('email');
       
       $deal2->save($reservation);
      

       Mail::to(request('email'))
            ->send(new DealTicket($deal,$random));

            $deal = Deal::find($id)->decrement('places');

            return back()
            ->with('message','email sent');

    }
    public function indexPage(){
        $deal = Deal::where('approve','1')->where('places','>','0')->latest("updated_at")->paginate(3);
        $deal1 = Deal::where('approve','1')->where('places','>','0')->latest()->take(4)->get();
        return view('deal', [
            'deals' => $deal,
            'dealss' => $deal1
        ]);
    }
    public function index(){
        $deal = Deal::latest("updated_at")->get();
    
       
    return view('deals.index', [
        'deals' => $deal
    ]);
    }
    public function indexAll(){
        $deal = Deal::where('approve','1')->where('places','>','0')->latest("updated_at")->get();
        return view('dealPage', [
            'deals' => $deal
        ]);
    }

}
