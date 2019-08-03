<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdlimasController extends Controller
{
    public function index()
    {
        $sdlimas = \App\Sdlima::all();

        return view('sd5', compact('sdlimas'));
    }
}
