<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SmpsatusController extends Controller
{
    public function index()
    {
        $smpsatus = \App\Smpsatu::all();

        return view('smp1', compact('smpsatus'));
    }


    
    public function smpsatu_viewadmin(){
        $smpsatus = \App\Smpsatu::all();
        return view('admin.smp.smp1crud', compact('smpsatus'));
    }

    public function delete($id){
        $smpsatus = \App\Smpsatu::find($id);
        $smpsatus->delete($id);
        return redirect()->route('admin.smp1');
    }

    public function edit($id){
        $smpsatus = \App\Smpsatu::find($id);
        return view('admin.smp.smp1edit', compact('smpsatus'));
    }

    public function update(Request $request, $id){
        $smpsatus = \App\Smpsatu::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp1dokumen')->put($extension, File::get($cover));
            $smpsatus->dokumen = 'upload/dokumen/smp1/'.$extension;
        }
        $smpsatus->mapel = $request->mapel;
        $smpsatus->judul = $request->judul;
        $smpsatus->videopel = 'upload/video/smp1/'.$request->videopel;
        $smpsatus->dokumen = 'upload/dokumen/smp1/'.$extension;
        $smpsatus->update();

        return redirect('/adminsmp1');
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
        $smpsatus = new \App\Smpsatu();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp1dokumen')->put($extension, File::get($cover));
            $smpsatus->dokumen = 'upload/dokumen/smp1/'.$extension;
        }

        $smpsatus->mapel = $request->mapel;
        $smpsatus->judul = $request->judul;
        $smpsatus->videopel = 'upload/video/smp1/'.$request->videopel;

        $smpsatus->save();

        return redirect()->route('admin.smp1');
    }

}
