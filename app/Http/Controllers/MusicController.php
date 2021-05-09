<?php

namespace App\Http\Controllers;
use App\Music;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function indexRadio(){
        return view('radio');
    }
    public function index(){
        $music = Music::latest()->get();
        $music1 = Music::latest()->get();
        return view('admin.uploudMusic',[
            'music' => $music,
            'music' => $music1
        ]);
    }
    public function store(Request $request){
        if($request->hasFile('song')){
            $filenamewithext=$request->file('song')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('song')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('song')->storeAs('public/music',$filenametostore);
    
        }else{
            $filenametostore='nosong.mp3';
        }
        

        $music = new Music();

        request()->validate([
            'title' => 'required',
            'artist' => 'required',
            'song' => 'required'
            
        ]);
        

        $music->title=request('title');
        $music->artist=request('artist');   
        $music->song=$filenametostore;
        


        $music->save();
        
        
        return back();
    }
    public function delete($id)
    {
        $music = Music::find($id);
        $music->delete();

        return redirect('/home/admin/uploudMusic');
    }
}
