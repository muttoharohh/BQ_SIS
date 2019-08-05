<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmpduasController extends Controller
{
    public function index()
    {
        $smpduas = \App\Smpdua::all();

        return view('smp2', compact('smpduas'));
    }
}
