<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Lightsaber;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sabers()
    {

        $sabers = Lightsaber::all();
        //dd($sabers);
        return view('lightsabers', compact('sabers'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
