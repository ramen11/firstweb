<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Apply auth middleware
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show home page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return  view('home');
    }
    /**
     * Show user profile/settings page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**profile user */
    public function userProfile(){
        return view('settings');
    }

    public function update(Request $request){
        $user = Auth::user();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        $user = Auth::user();

        if (!\Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->update([
            'password' => \Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password updated successfully!');
    }

    public function deleteAccount(Request $request): RedirectResponse
    {
        $user = Auth::user();

        Auth::logout();

        $user->delete();

        return Redirect::to('/');
    }
}