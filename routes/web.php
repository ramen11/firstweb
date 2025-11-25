<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Inertia\Inertia;


Route::get('/', function(){
    return view('app');
});

Route::post('/register', [UserController::class, 'register']);

// Route::post('/login', [UserController::class, 'login']);
require __DIR__.'/auth.php';

