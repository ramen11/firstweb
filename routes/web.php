<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;




Route::get('/', function(){
    return view('home');
});
Route::get('/register', [RegisteredUserController::class, 'index'])->name('form.register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('form.register');



Route::get('/login', function(){
    return view('login');
});
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('form.logout');

Route::get('/logout', function(){
    return view('home');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'store'])->name('form.logout');


Route::get('/main', function(){
    return view('main');
});

Route::get('/event1', function(){
    return view('event1');
});
Route::get('/event2', function(){
    return view('event2');
});
Route::get('/event3', function(){
    return view('event3');
});
Route::get('/event4', function(){
    return view('event4');
});

require __DIR__.'/auth.php';
