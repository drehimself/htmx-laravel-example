<?php

use App\Mail\ContactFormMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::view('/contact', 'contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'message' => 'required|min:3',
    ]);

    Mail::to($request->email)
        ->send(new ContactFormMailable($request->email, $request->message));

    return back()->with('success_message', 'Message was sent successfully!');
});

Route::get('/users', function () {
    return view('users', [
        'users' => User::all(),
    ]);
});

Route::post('/users', function (Request $request) {
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make('password'),
    ]);

    return back()->with('success_message', 'User was created successfully!');
});

Route::get('/search', function () {

    return view('search', [
        'users' => User::all(),
    ]);
});
