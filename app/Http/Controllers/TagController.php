<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        return response()->json([
            "allowed" => true
        ]);
    }

    public function create(Request $request){
        $validate = $request->validate([
            'tag' => ['regex:/[A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9] [A-Fa-f0-9][A-Fa-f0-9]/i','required']
        ]);
        $tag = New Tag;

        $tag->tag = $request->tag;

        $tag->save();

        if(!$tag->save()){
            return 'error';
        } else {
            return 'saved :)';
        }
    }
}
