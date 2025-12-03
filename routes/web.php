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

Route::get('/events/event', function(){
    return view('events.event');
})->name('form.event');


Route::get('/settings', function(){
    return view('settings');
})->name('form.settings');

Route::post('/settings/update', [ProfileController::class, 'update'])->name('settings.update');
Route::post('/settings/password', [ProfileController::class, 'updatePassword'])->name('settings.password');

Route::delete('/settings/delete', [ProfileController::class, 'deleteAccount'])->name('settings.delete');

require __DIR__.'/auth.php';
