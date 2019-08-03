<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdenamsController extends Controller
{
    public function index()
    {
        $sdenams = \App\Sdenam::all();

        return view('sd6', compact('sdenams'));
    }
}
