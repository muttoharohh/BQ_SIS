<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdempatsController extends Controller
{
    public function index()
    {
        $sdempats = \App\Sdempat::all();

        return view('sd4', compact('sdempats'));
    }
}
