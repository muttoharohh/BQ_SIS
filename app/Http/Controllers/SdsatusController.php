<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdsatusController extends Controller
{
    public function index()
    {
        $sdsatus = \App\Sdsatu::all();

        return view('sd1', compact('sdsatus'));
    }
}
