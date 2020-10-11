<?php

namespace App\Http\Controllers;

use App\Sms;

use Illuminate\Http\Request;

use App\Notifications\eventReserved;

use Illuminate\Support\Facades\Notification;

class SmsController extends Controller
{
    public function reserve(){

        
        return view('sms.create');
    }
    public function sendResrv(){

        
        return view('sms.send');
    }
    public function store(Request $request){
        $sms = new Sms();
        $validateAtributes = request()->validate([
            
            'phone_number' => 'required|unique:sms',
            
        ]);
        
        
        
        Sms::create($validateAtributes);
        return redirect('/events/resrv');
    }
    public function sendReservation(){

        $sms = new Sms();

        Notification::send($sms,new eventReserved());
        return back();
    }
}
