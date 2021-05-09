<?php

namespace App\Http\Controllers;

use App\Event;
use App\Deal;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $event = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        $event1 = Event::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(2)->get();
        $deal = Deal::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->get();
        $deal1 = deal::where('approve', '1')->where('places', '>', '0')->latest("updated_at")->take(4)->get();



        return view('home', [
            'events' => $event,
            'eventss' => $event1,
            'deals' => $deal,
            'dealss' => $deal1,

        ]);
    }
}
