<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoshumsController extends Controller
{
    public function index()
    {
        $soshums = \App\Soshum::all();

        return view('soshum', compact('soshums'));
    }
}
