<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Owner;

class HomepageController extends Controller
{
    public function render(Request $request, String $username){
        if(session()->has('username')){
            if($username == session()->get('username')){
    
                $events = Event::where('active', 1)
                    ->orderBy('name')
                    ->get();

                return view('users.home', ['events' => $events]);

            }
        }
        return view('users.login');
    }


    public function getEvents(Request $request, String $name){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $events = Owner::where('name',$name)->first()->events;

                
                
                return view('owners.home', ['events' => $events]);
            }
        }
        return view('owners.login');
    }

    
}
