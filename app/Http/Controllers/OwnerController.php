<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function auth(Request $request, Owner $owner){
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        $data = $request->input();
        
        if (Auth::guard('owner')->attempt($credentials)) {
            $request->session()->regenerate();
            
            $request->session()->put('name', $data['name']);

            return redirect()->intended('/owners/' . $data['name']);
        }
 
        return back()->withErrors([
            'name' => 'Informações incorretas.',
        ])->onlyInput('name');
    }

    public function register(Request $request, Owner $owner){
        $data = $request->input();

        $owner->name = $data['name'];
        $owner->email = $data['email'];
        $owner->phone = $data['phone'];
        $owner->password = $data['password'];

        $owner->save();

        $request->session()->put('name', $data['name']);

        return redirect()->intended('/owners/' . $data['name']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/owners/login');
    }
}
