<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdduasController extends Controller
{
    public function index()
    {
        $sdduas = \App\Sddua::all();

        return view('sd2', compact('sdduas'));
    }
}
