<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class SainteksController extends Controller
{
    public function index()
    {
        $sainteks = \App\Saintek::all();

        return view('saintek', compact('sainteks'));
    }

    public function saintek_viewadmin(){
        $sainteks = \App\Saintek::all();
        return view('admin.sbmptn.saintekcrud', compact('sainteks'));
    }

    public function delete($id){
        $sainteks = \App\Saintek::find($id);
        $sainteks->delete($id);
        return redirect()->route('admin.saintek');
    }

    public function edit($id){
        $sainteks = \App\Saintek::find($id);
        return view('admin.sbmptn.saintekedit', compact('sainteks'));
    }

    public function update(Request $request, $id){
        $sainteks = \App\Saintek::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('saintekdokumen')->put($extension, File::get($cover));
            $sainteks->dokumen = 'upload/dokumen/saintek/'.$extension;
        }
        $sainteks->mapel = $request->mapel;
        $sainteks->judul = $request->judul;
        $sainteks->videopel = 'upload/video/saintek/'.$request->videopel;
        $sainteks->dokumen = 'upload/dokumen/saintek/'.$extension;
        $sainteks->update();

        return redirect('/adminsaintek');
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
        $sainteks = new \App\Saintek();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('saintekdokumen')->put($extension, File::get($cover));
            $sainteks->dokumen = 'upload/dokumen/saintek/'.$extension;
        }

        $sainteks->mapel = $request->mapel;
        $sainteks->judul = $request->judul;
        $sainteks->videopel = 'upload/video/saintek/'.$request->videopel;

        $sainteks->save();

        return redirect()->route('admin.saintek');
    }
}
