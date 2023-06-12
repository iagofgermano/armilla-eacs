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
        
    }
}
