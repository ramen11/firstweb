<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/', function(){
    return view('app');
});

Route::post('/register', [UserController::class, 'register']);


// require __DIR__.'/auth.php';

