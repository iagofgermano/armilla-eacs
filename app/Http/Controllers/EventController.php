<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Owner;
use App\Models\Tag;
use App\Models\User;

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

        
        return redirect('/owners/' . $owner_name . '/event/' . $event->id . '/tags');
        
        
    }

    public function renderEvent(Request $request, String $name, String $event_id){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $event = Event::find($event_id);

                if($name == $event->owner->name){

                    $eventTags = $event->tags;

                    $numberOfTags = $eventTags->count();

                    $usedTags = $eventTags->whereNotNull('user_id')->count();

                    $freeTags = $numberOfTags - $usedTags;



                    return view('owners.events.event', 
                            array(
                                'event' => $event, 
                                'tags' => $numberOfTags,
                                'usedTags' => $usedTags,
                                'freeTags' => $freeTags
                            ));
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

                $event->tags()->update(['event_id' => null, 'user_id' => null]);

                $event->save();



                return redirect('/owners/' . $name . '/event/' . $event_id);
                
            }
        }

        return redirect('/owners/login');
    }

    public function renderSubscribe(Request $request, String $username, String $event_id){
        if(session()->has('username')){
            if($username == session()->get('username')){

                $event = Event::find($event_id);

                $wages = $event->tags()->whereNull('user_id')->count();

                $owner = $event->owner->name;

                $user = User::where('username', $username)->first();

                $isSubscribed = $event->tags()->where('user_id', $user->id)->count();
                
                return view('users.subscribe', 
                        array(
                            'event' => $event, 
                            'owner' => $owner, 
                            'wages' => $wages,
                            'isSubscribed' => $isSubscribed,
                        ));

            }
        }

        return redirect('/users/login');
    }

    public function subscribe(Request $request, String $username, String $event_id){
        if(session()->has('username')){
            if($username == session()->get('username')){

                $user = User::where('username', $username)
                                ->first();

                Tag::where('event_id', $event_id)
                    ->whereNull('user_id')
                    ->take(1)
                    ->update(['user_id' => $user->id]);



                return redirect('/users/' . session('username') . '/events/' . $event_id . '/mytag');

            }
        }

        return redirect('/users/login');
    }

    public function unsubscribe(Request $request, String $username, String $event_id) {
        if(session()->has('username')){
            if($username == session()->get('username')){

                $user = User::where('username', $username)
                ->first();

                Tag::where('event_id', $event_id)
                    ->where('user_id', $user->id)
                    ->take(1)
                    ->update(['user_id' => null]);

                return redirect('/users/' . session('username'));


            }
        }

        return redirect('/users/' . session('username'));
    }

    public function getEventTags(Request $request, String $name, String $event_id){
        if(session()->has('name')){
            if($name == session()->get('name')){

                $tags = Tag::where('event_id', $event_id)->get();

                return view('owners.events.tags', array('tags' => $tags));
            }
        }
    }

    public function userTag(Request $request, String $username, String $event_id){
        if(session()->has('username')){
            if($username == session()->get('username')){
                $tag = Tag::where('event_id', $event_id)
                    ->where('user_id', session()->get('user_id'))
                    ->first();

                return view('users.tag', array('tag' => $tag));
            }
        }
    }
} 