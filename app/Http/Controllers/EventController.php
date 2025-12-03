<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(): View
    {
        return view('events.event');
    }

    public function store(Request $request)
    {
        // Logic to store event details
    }

    public function show($id)
    {
        // Logic to show a specific event
    }
}