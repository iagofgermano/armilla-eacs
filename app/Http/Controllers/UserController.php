<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request, User $user){
        
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $data = $request->input();
        
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            $request->session()->put('user_id', $user->id);
            
            $request->session()->put($data);

            return redirect()->intended('/users/'.$data['username']);
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
    

    public function register(Request $request, User $user){
        $data = $request->input();

        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();

        $request->session()->put('username', $data['username']);

        $request->session()->put('user_id', $user->id);

        return redirect()->intended('/users/'.$data['username']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->intended('/users/login');
    }
}
