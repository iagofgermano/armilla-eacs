<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use App\Models\Event_detail;

class TagController extends Controller
{

    protected $tag_validation_rules = [
        'regex:/[A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9]/i',
        'required',
    ];
    protected $returnCodes = [
        "not_saved" => array('status' => 'error'), 
        "saved" => array('status' => 'success'),
        "tag_unregistered" => array('validated' => false),
        "tag_unused" => array('validated' => false),
        "tag_without_event" => array('validated' => false),
        "tag_event_inactive" => array('validated' => false),
        "absent_type" => array('validated' => false),
    ];

    public function register(Request $request)
    {
        $validate = $request->validate([
            'tag' => $this->tag_validation_rules,
        ]);
        $tag = New Tag;

        $tag->tag = $request->tag;

        $tag->save();

        if(!$tag->save())
        {
            return $this->returnCodes["not_saved"];
        } else {
            return $this->returnCodes["saved"];
        }
    }

    public function check(Request $request)
    {
        
        $validate = $request->validate([
            'tag' => $this->tag_validation_rules,
        ]);

        $tag = Tag::where('tag', $request->tag)->first();

        if(!$tag){
            return $this->returnCodes["tag_unregistered"];
        }

        if(!$tag->user_id) {
            return $this->returnCodes["tag_unused"];
        }

        $user = User::where('id', $tag->user_id)->first();
        
        $event = $tag->event;

        if(!$event){
            return $this->returnCodes["tag_without_event"];
        }
        
        $active = $event->active;

        if(!$request->has('type')){
            return $this->returnCodes["absent_type"];
        }

        if($active == '1')
        {
            $event_detail = New Event_detail;

            $event_detail->event_id = $event->id;

            $event_detail->event_name = $event->name;

            $event_detail->tag_id = $tag->id;

            $event_detail->tag_name = $tag->tag;

            $event_detail->user_id = $user->id;

            $event_detail->username = $user->username;

            $event_detail->type = $request->input('type');

            $event_detail->save();

            return $event_detail;

        } else {
            return $this->returnCodes["tag_event_inactive"];
        }
    }
}
