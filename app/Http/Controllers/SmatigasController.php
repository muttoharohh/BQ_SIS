<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmatigasController extends Controller
{
    public function index()
    {
        $smatigas = \App\Smatiga::all();

        return view('sma3', compact('smatigas'));
    }
}
