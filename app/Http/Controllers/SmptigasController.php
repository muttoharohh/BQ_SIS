<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmptigasController extends Controller
{
    public function index()
    {
        $smptigas = \App\Smptiga::all();

        return view('smp3', compact('smptigas'));
    }
}
