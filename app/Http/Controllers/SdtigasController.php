<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdtigasController extends Controller
{
    public function index()
    {
        $sdtigas = \App\Sdtiga::all();

        return view('sd3', compact('sdtigas'));
    }
}
