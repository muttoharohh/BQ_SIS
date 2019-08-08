<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SdsatusController extends Controller
{
    public function index()
    {
        $sdsatus = \App\Sdsatu::all();

        return view('sd1', compact('sdsatus'));
    }

    public function sdsatu_viewadmin(){
        $sdsatus = \App\Sdsatu::all();
        return view('admin.sd.sd1crud', compact('sdsatus'));
    }

    public function delete($id){
        $sdsatus = \App\Sdsatu::find($id);
        $sdsatus->delete($id);
        return redirect()->route('admin.sd1');
    }

    public function edit($id){
        $sdsatus = \App\Sdsatu::find($id);
        return view('admin.sd.sd1edit', compact('sdsatus'));
    }

    public function update(Request $request, $id){
        $sdsatus = \App\Sdsatu::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd1dokumen')->put($extension, File::get($cover));
            $sdsatus->dokumen = 'upload/dokumen/sd1/'.$extension;
        }
        $sdsatus->mapel = $request->mapel;
        $sdsatus->judul = $request->judul;
        $sdsatus->videopel = 'upload/video/sd1/'.$request->videopel;

        $sdsatus->update();

        return redirect('/adminsd1');
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
        $sdsatus = new \App\Sdsatu();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd1dokumen')->put($extension, File::get($cover));
            $sdsatus->dokumen = 'upload/dokumen/sd1/'.$extension;
        }

        $sdsatus->mapel = $request->mapel;
        $sdsatus->judul = $request->judul;
        if($request->videopel != ""){
            $sdsatus->videopel = 'upload/video/sd1/'.$request->videopel;
        }

        $sdsatus->save();

        return redirect()->route('admin.sd1');
    }
}
