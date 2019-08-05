<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmpsatusController extends Controller
{
    public function index()
    {
        $smpsatus = \App\Smpsatu::all();

        return view('smp1', compact('smpsatus'));
    }
}
