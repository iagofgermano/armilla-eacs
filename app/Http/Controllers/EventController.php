<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Owner;
use App\Models\Tag;

class EventController extends Controller
{
    public function register(Request $request, Event $event){
        
        $owner_id = $request->session()->get('owner_id');
        $owner_name = $request->session()->get('name');

        $event->name = $request->name;
        $event->description = $request->description;
        $event->active = '1';
        $event->owner_id = $owner_id;

        $numberOfTags = $request->numberOfTags;

        $event->save();  

        Tag::whereNull('event_id')
            ->limit($numberOfTags)
            ->update(['event_id' => $event->id]);

        
        return redirect('/owners/' . $owner_name);
        
        
    }

    public function renderEvent(Request $request, String $name, String $event_id){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $event = Event::find($event_id);

                if($name == $event->owner->name){

                    $eventTags = $event->tags->count();

                    return view('owners.events.event', array('event' => $event, 'tags' => $eventTags));
                }
            }
        }

        return redirect('/owners/login');
    }

    public function inactivate(Request $request, String $name, String $event_id){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $event = Event::find($event_id);

                $event->active = '0';

                $event->tags()->update(['event_id' => null]);

                $event->save();



                return redirect('/owners/' . $name . '/event/' . $event_id);
                
            }
        }

        return redirect('/owners/login');
    }
} 
