<?php

use App\Mail\ContactFormMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clicked', function () {
    sleep(2);
    // return '<div>CLICKED</div>';
    return view('test', [
        'foo' => 'bar',
    ]);
});

Route::post('/contact', function (Request $request) {
    // $request->validate([
    //     'email' => 'required|email',
    //     'message' => 'required|min:3',
    // ]);

    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'message' => 'required|min:3',
    ]);

    if ($validator->fails()) {
        return view('contact-error', [
            'errors' => $validator->errors(),
        ]);
    }

    Mail::to($request->email)
        ->send(new ContactFormMailable($request->email, $request->message));

    // return back()->with('success_message', 'Message was sent successfully!');
    return view('contact-success');
});

Route::post('/users', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
    ]);

    if ($validator->fails()) {
        return view('users-error', [
            'errors' => $validator->errors(),
        ]);
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make('password'),
    ]);

    return view('users-success', [
        'user' => $user,
    ]);
    // return back()->with('success_message', 'User was created successfully!');
});

Route::post('/search', function (Request $request) {
    $users = User::query()
        ->where('name', 'like', '%'.$request->search.'%')
        ->orWhere('email', 'like', '%'.$request->search.'%')
        ->get();

    if ($users->isEmpty()) {
        return '<div class="mt-4">No users found.</div>';
    }

    return view('components.table-users', [
        'users' => $users,
    ]);
});
