<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' =>['required','min:3','max:10'],
            'email' => ['required','email'],
            'password' => ['required','miin:8','max:200']
        ]);
        return'bonjour from our controller';
    }
    // public function login(Request $request){
    //     $incomingFields = $request->validate([
    //         'name' =>['required','min:3','max:10'],
    //         'email' => ['required','email'],
    //         'password' => ['required','miin:8','max:200']
    //     ]);
    //     return'Welcome to firstweb!!!';
    // }
}
