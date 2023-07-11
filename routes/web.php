<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
    GET routes

*/

Route::get('/', function () {
    return view('home');
});

//owner routes

Route::get('/owners/login', function () {
    if(session()->has('name')){
        return redirect('/owners/' . session()->get('name'));
    }
    return view('owners.login');
});

Route::get('/owners/register', function () {
    return view('owners.register');
});

Route::get('/owners/{name}', function (String $name) {
    if(session()->has('name')){
        if($name == session()->get('name')){
            return view('owners.home');
        }
    }
    return view('owners.login');
});

// user routes

Route::get('/users/login', function (Request $request) {
    if($request->session()->has('username')){
        return redirect('/users/' . session()->get('username'));
    }
    return view('users.login');
});

Route::get('/users/register', function () {
    return view('users.register');
});

Route::get('/users/{username}', function (String $username) {
    if(session()->has('username')){
        if($username == session()->get('username')){
            return view('users.home');
        }
    }
    return view('users.login');
});

/*
    POST routes

*/


// register routes
Route::post('/users/submit', [UserController::class, 'register']);

Route::post('/owners/submit', [OwnerController::class, 'register']);

//login routes

Route::post('/users/login', [UserController::class, 'auth']);

Route::post('/owners/login', [OwnerController::class, 'auth']);

//logout routes

Route::get('/owners/logout', [OwnerController::class, 'logout']);

Route::get('/users/logout', [UserController::class, 'logout']);