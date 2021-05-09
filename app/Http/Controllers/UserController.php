<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function edit($id)
    {

        $user = User::find($id);
        return view('user.edit', [
            'user' => $user
        ]);
    }
    public function update($id)
    {
        $user = User::find($id);

        request()->validate([

            'name' => 'required',
        ]);


        $user->name = request('name');
        
        $user->save();
        return back();

    }

}
