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
        $soshums = \App\Soshum::all();
        return view('admin.sbmptn.soshumcrud', compact('soshums'));
    }

    public function delete($id){
        $soshums = \App\Soshum::find($id);
        $soshums->delete($id);
        return redirect()->route('admin.soshum');
    }

    public function edit($id){
        $soshums = \App\Soshum::find($id);
        return view('admin.sbmptn.soshumedit', compact('soshums'));
    }

    public function update(Request $request, $id){
        $soshums = \App\Soshum::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('soshumdokumen')->put($extension, File::get($cover));
            $soshums->dokumen = 'upload/dokumen/soshum/'.$extension;
        }
        $soshums->mapel = $request->mapel;
        $soshums->judul = $request->judul;
        $soshums->videopel = 'upload/video/soshum/'.$request->videopel;
        $soshums->dokumen = 'upload/dokumen/soshum/'.$extension;
        $soshums->update();

        return redirect('/adminsoshum');
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
        $soshums = new \App\Soshum();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('soshumdokumen')->put($extension, File::get($cover));
            $soshums->dokumen = 'upload/dokumen/soshum/'.$extension;
        }

        $soshums->mapel = $request->mapel;
        $soshums->judul = $request->judul;
        $soshums->videopel = 'upload/video/soshum/'.$request->videopel;

        $soshums->save();

        return redirect()->route('admin.soshum');
    }
}
