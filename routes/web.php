<?php

use Illuminate\Support\Facades\Route;
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

// view routes

Route::get('/', function () {
    return view('home');
});

//owner routes

Route::get('/owners/login', function () {
    if(session()->has('name')){
        return redirect('/owners');
    }
    return view('owners.login');
});

Route::get('/owners/register', function () {
    if(session()->has('name')){
            return redirect('/owners');
        }
    return view('owners.register');
});

Route::get('/owners', function () {
    return view('owners.home');
});

// user routes

Route::get('/users/login', function () {
    if(session()->has('username')){
        return redirect('/users');
    }
    return view('users.login');
});

Route::get('/users/register', function () {
    if(session()->has('username')){
        return redirect('/users');
    }
    return view('users.register');
});

Route::get('/users', function () {
    return view('users.home');
});


// register routes
Route::post('/users/submit', [UserController::class, 'register']);

Route::post('/owners/submit', [OwnerController::class, 'register']);

//login routes

Route::post('/users/login', [UserController::class, 'auth']);

Route::post('/owners/login', [OwnerController::class, 'auth']);