<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SainteksController extends Controller
{
    public function index()
    {
        $sainteks = \App\Saintek::all();

        return view('saintek', compact('sainteks'));
    }
}
