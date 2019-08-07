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


    
    public function Smasatu_viewadmin(){
        $Smasatus = \App\Smasatu::all();
        return view('admin.sma.sma1crud', compact('Smasatus'));
    }

    public function delete($id){
        $Smasatus = \App\Smasatu::find($id);
        $Smasatus->delete($id);
        return redirect()->route('admin.sma1');
    }

    public function edit($id){
        $Smasatus = \App\Smasatu::find($id);
        return view('admin.sma.sma1edit', compact('Smasatus'));
    }

    public function update(Request $request, $id){
        $Smasatus = \App\Smasatu::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma1dokumen')->put($extension, File::get($cover));
            $Smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        }
        $Smasatus->mapel = $request->mapel;
        $Smasatus->judul = $request->judul;
        $Smasatus->videopel = 'upload/video/sma1/'.$request->videopel;
        $Smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        $Smasatus->update();

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
        $Smasatus = new \App\Smasatu();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd2dokumen')->put($extension, File::get($cover));
            $Smasatus->dokumen = 'upload/dokumen/sma1/'.$extension;
        }

        $Smasatus->mapel = $request->mapel;
        $Smasatus->judul = $request->judul;
        $Smasatus->videopel = 'upload/video/sma1/'.$request->videopel;

        $Smasatus->save();

        return redirect()->route('admin.sma1');
    }

}
