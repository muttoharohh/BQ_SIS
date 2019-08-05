<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmasatusController extends Controller
{
    public function index()
    {
        $smasatus = \App\Smasatu::all();

        return view('sma1', compact('smasatus'));
    }
}
