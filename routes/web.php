<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', function(){
    return view('app');
});

Route::post('/', [RegisteredUserController::class, 'store'])->name('form.register');


require __DIR__.'/auth.php';
