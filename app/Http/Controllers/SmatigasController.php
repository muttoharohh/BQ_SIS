<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class SmatigasController extends Controller
{
    public function index()
    {
        $smatigas = \App\Smatiga::all();

        return view('sma3', compact('smatigas'));
    }

    public function smatiga_viewadmin(){
        $smatigas = \App\Smatiga::all();
        return view('admin.sma.sma3crud', compact('smatigas'));
    }

    public function delete($id){
        $smatigas = \App\Smatiga::find($id);
        $smatigas->delete($id);
        return redirect()->route('admin.sma3');
    }

    public function edit($id){
        $smatigas = \App\Smatiga::find($id);
        return view('admin.sma.sma3edit', compact('smatigas'));
    }

    public function update(Request $request, $id){
        $smatigas = \App\Smatiga::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma3dokumen')->put($extension, File::get($cover));
            $smatigas->dokumen = 'upload/dokumen/sma3/'.$extension;
        }
        $smatigas->mapel = $request->mapel;
        $smatigas->judul = $request->judul;
        $smatigas->videopel = 'upload/video/sma3/'.$request->videopel;
        $smatigas->dokumen = 'upload/dokumen/sma3/'.$extension;
        $smatigas->update();

        return redirect('/adminsma3');
    }

    public function create(Request $request){
        $this->validate($request,[
            'mapel' => 'required',
            'judul' => 'required',
            'videopel' => 'required',
            'dokumen' => 'required|file'
        ]);

        // $cover = $request->file('videopel');
        // $extension = $cover->getClientOriginalName();
        // Storage::disk('sd1video')->put($extension, File::get($cover));
        $smatigas = new \App\Smatiga();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma3dokumen')->put($extension, File::get($cover));
            $smatigas->dokumen = 'upload/dokumen/sma3/'.$extension;
        }

        $smatigas->mapel = $request->mapel;
        $smatigas->judul = $request->judul;
        $smatigas->videopel = 'upload/video/sma3/'.$request->videopel;

        $smatigas->save();

        return redirect()->route('admin.sma3');
    }
}
