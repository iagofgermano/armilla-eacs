<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Owner;
use App\Models\Tag;

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

                $owner = Owner::where('name', $name)->first();

                $owner_id = $owner['id'];

                $request->session()->put('owner_id', $owner_id);

                $events = $owner->events;

                
                return view('owners.home', ['events' => $events]);
            }
        }
        return view('owners.login');
    }

    public function getTagsAvailable(Request $request, String $name){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $tagsAvailable = Tag::whereNull('event_id')->count();

                return view('owners.events.register', ['tagsAvailable' => $tagsAvailable]);
            }
        }
        return view('owners.login');
    }
    
}