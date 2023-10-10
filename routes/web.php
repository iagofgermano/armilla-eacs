<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\EventController;

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

//logout routes

Route::get('/owners/logout', [OwnerController::class, 'logout']);

Route::get('/users/logout', [UserController::class, 'logout']);

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

Route::get('/owners/{name}', [HomepageController::class, 'getEvents']);

Route::get('/owners/{name}/event/{event_id}', [EventController::class, 'renderEvent']);

Route::get('/owners/{name}/event/{event_id}/inactivate', [EventController::class, 'inactivate']);

Route::get('/owners/{name}/register/event', [HomepageController::class, 'getTagsAvailable']);

Route::get('/owners/{name}/event/{event_id}/tags', [EventController::class, 'getEventTags']);

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

Route::get('/users/{username}', [HomepageController::class, 'render']);

Route::get('/users/{username}/events/{event_id}', [EventController::class, 'renderSubscribe']);

Route::get('/users/{username}/events/{event_id}/subscribe', [EventController::class, 'subscribe']);

Route::get('/users/{username}/events/{event_id}/unsubscribe', [EventController::class, 'unsubscribe']);

Route::get('/users/{username}/events/{event_id}/mytag', [EventController::class, 'userTag']);
/*
    POST routes

*/


// register routes
Route::post('/users/submit', [UserController::class, 'register']);

Route::post('/owners/submit', [OwnerController::class, 'register']);

//login routes

Route::post('/users/login', [UserController::class, 'auth']);

Route::post('/owners/login', [OwnerController::class, 'auth']);

//event register

Route::post('/owners/register/event', [EventController::class, 'register']);