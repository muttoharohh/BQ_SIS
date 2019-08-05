<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmaduasController extends Controller
{
    public function index()
    {
        $smaduas = \App\Smadua::all();

        return view('sma2', compact('smaduas'));
    }
}
