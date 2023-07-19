<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;

class TagController extends Controller
{

    public function register(Request $request)
    {
        $validate = $request->validate([
            'tag' => ['regex:/[A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9]/i','required']
        ]);
        $tag = New Tag;

        $tag->tag = $request->tag;

        $tag->save();

        if(!$tag->save())
        {
            return 'error';
        } else {
            return 'saved :)';
        }
    }

    public function check(Request $request)
    {
        $validate = $request->validate([
            'tag' => ['regex:/[A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9]/i','required']
        ]);

        $tag = Tag::where('tag', $request->tag)->first();

        if(!$tag){
            return 'not ok';
        }

        if(!$tag->user_id) {
            return 'not ok';
        }

        $user = User::where('id', $tag->user_id)->first();
        
        $event = $tag->event;

        if(!$event){
            return 'not ok';
        }

        $active = $event->active;

        if($active == '1')
        {
            return [
                'allowed' => 'yes',
                'user_id' => $tag->user_id,
                'event_id' => $event->id
                ];

        } else {
            return 'not ok';
        }
    }
}
