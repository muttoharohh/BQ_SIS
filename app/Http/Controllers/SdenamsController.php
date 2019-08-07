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
    public function sdenam_viewadmin(){
        $sdenams = \App\Sdenam::all();
        return view('admin.sd.sd6crud', compact('sdenams'));
    }

    public function delete($id){
        $sdenams = \App\Sdenam::find($id);
        $sdenams->delete($id);
        return redirect()->route('admin.sd6');
    }

    public function edit($id){
        $sdenams = \App\Sdenam::find($id);
        return view('admin.sd.sd6edit', compact('sdenams'));
    }

    public function update(Request $request, $id){
        $sdenams = \App\Sdenam::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd6dokumen')->put($extension, File::get($cover));
            $sdenams->dokumen = 'upload/dokumen/sd6/'.$extension;
        }
        $sdenams->mapel = $request->mapel;
        $sdenams->judul = $request->judul;
        $sdenams->videopel = 'upload/video/sd6/'.$request->videopel;
        $sdenams->dokumen = 'upload/dokumen/sd6/'.$extension;
        $sdenams->update();

        return redirect('/adminsd6');
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
        $sdenams = new \App\Sdenam();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd6dokumen')->put($extension, File::get($cover));
            $sdenams->dokumen = 'upload/dokumen/sd6/'.$extension;
        }

        $sdenams->mapel = $request->mapel;
        $sdenams->judul = $request->judul;
        $sdenams->videopel = 'upload/video/sd6/'.$request->videopel;

        $sdenams->save();

        return redirect()->route('admin.sd6');
    }
}
