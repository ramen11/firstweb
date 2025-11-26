<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', function(){
    return view('app');
});

Route::post('/', [RegisteredUserController::class, 'store'])->name('form.register');



Route::get('/login', function(){
    return view('app');
});

Route::post('/login', [ConfirmablePasswordController::class, 'store'])->name('form.login');


require __DIR__.'/auth.php';
