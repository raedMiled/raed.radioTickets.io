<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function indexContact()
    {
        return view('contact.contact');
    }
    public function contactSend()
    {
        request()->validate(['name' => 'required']);
        request()->validate(['email' => 'required|email']);
        request()->validate(['phone' => 'required' ]);
        request()->validate(['comment' => 'required']);
        request()->validate(['g-recaptcha-response' => 'required|captcha']);
        $name=request('name');
        $email=request('email');
        $phone=  request('phone');
        $comment= request('comment');
        Mail::to('raedchelsea@gmail.com')
            ->send(new Contact($name,$email,$phone, $comment));

        return back()
            ->with('message', 'email sent');
    }
}
