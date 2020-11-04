<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function payment(){
        $availablePlans =[
            'price_1HPr3TLWIvkJJkYGm8z1YZ9g' => "Yearly"
         ];
        $data = [
            'intent' => auth()->user()->createSetupIntent(),
            'plans'=> $availablePlans
        ];
        return view('payment')->with($data);
    }
    public function subscribe(Request $request)
    {
        $user = auth()->user();
        //$paymentMethod = $request->payment_method;

        $paymentMethod = request ('payment_method');
        //$planId = $request->plan;
        $planId = request('plan');
        $user->newSubscription('main', $planId)->create($paymentMethod);

        $commerçant = Role::firstOrCreate(['name' => 'commerçant']);
        $user->assignrole($commerçant);

        return response([
            'success_url'=> redirect()->intended('/home')->getTargetUrl(),
            'message'=>'success'
        ]);

    }
}
