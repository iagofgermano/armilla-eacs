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

Route::get('/', function () {
    return view('home');
});

Route::get('/owners/login', function () {
    return view('owners.login');
});

Route::get('/owners/register', function () {
    return view('owners.register');
});

Route::get('/users/login', function () {
    return view('users.login');
});

Route::get('/users/register', function () {
    return view('users.register');
});

 //Route::post('/users/submit', [UserController::register]);

//Route::post('/owners/submit', [OwnerController::register]);