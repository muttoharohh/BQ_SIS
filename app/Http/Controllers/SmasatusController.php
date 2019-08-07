<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SmasatusController extends Controller
{
    public function index()
    {
        $smasatus = \App\Smasatu::all();

        return view('sma1', compact('smasatus'));
    }


    
    public function smasatu_viewadmin(){
        $smasatus = \App\Smasatu::all();
        return view('admin.sma.sma1crud', compact('smasatus'));
    }

    public function delete($id){
        $smasatus->delete($id);
        $smasatus = \App\Smasatu::find($id);
        return redirect()->route('admin.sma1');
    }

    public function edit($id){
        $smasatus = \App\Smasatu::find($id);
        return view('admin.sma.sma1edit', compact('smasatus'));
    }

    public function update(Request $request, $id){
        $smasatus = \App\Smasatu::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma1dokumen')->put($extension, File::get($cover));
            $smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        }
        $smasatus->mapel = $request->mapel;
        $smasatus->judul = $request->judul;
        $smasatus->videopel = 'upload/video/sma1/'.$request->videopel;
        $smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        $smasatus->update();

        return redirect('/adminsma1');
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
        $smasatus = new \App\Smasatu();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma1dokumen')->put($extension, File::get($cover));
            $smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        }

        $smasatus->mapel = $request->mapel;
        $smasatus->judul = $request->judul;
        $smasatus->videopel = 'upload/video/sma1/'.$request->videopel;

        $smasatus->save();

        return redirect()->route('admin.sma1');
    }

}
