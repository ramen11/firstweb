<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function(){
    return view('home');
});

Route::get('/register', [RegisteredUserController::class, 'index'])->name('form.register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('form.register');

Route::get('/login', function(){
    return view('login');
});
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('form.login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('form.logout');

Route::get('/main', function(){
    return view('main');
})->name('form.main');

Route::get('/events/event1', function(){
    return view('events.event1');
})->name('form.event1');

Route::get('/events/event2', function(){
    return view('events.event2');
})->name('form.event2');

Route::get('/events/event3', function(){
    return view('events.event3');
})->name('form.event3');

Route::get('/events/event4', function(){
    return view('events.event4');
})->name('form.event4');

Route::get('/events/event5', function(){
    return view('events.event5');
})->name('form.event5');

Route::get('/events/event6', function(){
    return view('events.event6');
})->name('form.event6');

Route::get('/settings', function(){
    return view('settings');
})->name('form.settings');

Route::post('/settings/update', [ProfileController::class, 'update'])->name('settings.update');
Route::post('/settings/password', [ProfileController::class, 'updatePassword'])->name('settings.password');

Route::delete('/settings/delete', [ProfileController::class, 'deleteAccount'])->name('settings.delete');

require __DIR__.'/auth.php';
