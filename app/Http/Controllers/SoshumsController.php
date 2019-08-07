<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class SoshumsController extends Controller
{
    public function index()
    {
        $soshums = \App\Soshum::all();

        return view('soshum', compact('soshums'));
    }

    public function soshum_viewadmin(){
        $sainteks = \App\Saintek::all();
        return view('admin.sbmptn.soshumcrud', compact('sainteks'));
    }

    public function delete($id){
        $sainteks = \App\Saintek::find($id);
        $sainteks->delete($id);
        return redirect()->route('admin.soshum');
    }

    public function edit($id){
        $sainteks = \App\Saintek::find($id);
        return view('admin.sbmptn.soshumedit', compact('sainteks'));
    }

    public function update(Request $request, $id){
        $sainteks = \App\Saintek::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('soshumdokumen')->put($extension, File::get($cover));
            $sainteks->dokumen = 'upload/dokumen/soshum/'.$extension;
        }
        $sainteks->mapel = $request->mapel;
        $sainteks->judul = $request->judul;
        $sainteks->videopel = 'upload/video/soshum/'.$request->videopel;
        $sainteks->dokumen = 'upload/dokumen/soshum/'.$extension;
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
            Storage::disk('soshumdokumen')->put($extension, File::get($cover));
            $sainteks->dokumen = 'upload/dokumen/soshum/'.$extension;
        }

        $sainteks->mapel = $request->mapel;
        $sainteks->judul = $request->judul;
        $sainteks->videopel = 'upload/video/soshum/'.$request->videopel;

        $sainteks->save();

        return redirect()->route('admin.soshum');
    }
}
