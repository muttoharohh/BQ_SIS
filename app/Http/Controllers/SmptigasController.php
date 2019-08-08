<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SmptigasController extends Controller
{
    public function index()
    {
        $smptigas = \App\Smptiga::all();

        return view('smp3', compact('smptigas'));
    }

    
    public function smptiga_viewadmin(){
        $smptigas = \App\Smptiga::all();
        return view('admin.smp.smp3crud', compact('smptigas'));
    }

    public function delete($id){
        $smptigas = \App\Smptiga::find($id);
        $smptigas->delete($id);
        return redirect()->route('admin.smp3');
    }

    public function edit($id){
        $smptigas = \App\Smptiga::find($id);
        return view('admin.smp.smp3edit', compact('smptigas'));
    }

    public function update(Request $request, $id){
        $smptigas = \App\Smptiga::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp3dokumen')->put($extension, File::get($cover));
            $smptigas->dokumen = 'upload/dokumen/smp3/'.$extension;
        }
        $smptigas->mapel = $request->mapel;
        $smptigas->judul = $request->judul;
        $smptigas->videopel = 'upload/video/smp3/'.$request->videopel;
        $smptigas->update();

        return redirect('/adminsmp3');
    }

    public function create(Request $request){
        $this->validate($request,[
            'mapel' => 'required',
            'judul' => 'required'
            // 'videopel' => 'required',
            // 'dokumen' => 'required|file'
        ]);

        // $cover = $request->file('videopel');
        // $extension = $cover->getClientOriginalName();
        // Storage::disk('sd1video')->put($extension, File::get($cover));
        $smptigas = new \App\Smptiga();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp3dokumen')->put($extension, File::get($cover));
            $smptigas->dokumen = 'upload/dokumen/smp3/'.$extension;
        }

        $smptigas->mapel = $request->mapel;
        $smptigas->judul = $request->judul;
        if($request->videopel != ""){
            $smptigas->videopel = 'upload/video/smp3/'.$request->videopel;
        }

        $smptigas->save();

        return redirect()->route('admin.smp3');
    }

}
