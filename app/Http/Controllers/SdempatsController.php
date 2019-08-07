<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SdempatsController extends Controller
{
    public function index()
    {
        $sdempats = \App\Sdempat::all();

        return view('sd4', compact('sdempats'));
    }
    public function sdempat_viewadmin(){
        $sdempats = \App\Sdempat::all();
        return view('admin.sd.sd4crud', compact('sdempats'));
    }

    public function delete($id){
        $sdempats = \App\Sdempat::find($id);
        $sdempats->delete($id);
        return redirect()->route('admin.sd4');
    }

    public function edit($id){
        $sdempats = \App\Sdempat::find($id);
        return view('admin.sd.sd4edit', compact('sdempats'));
    }

    public function update(Request $request, $id){
        $sdempats = \App\Sdempat::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd4dokumen')->put($extension, File::get($cover));
            $sdempats->dokumen = 'upload/dokumen/sd4/'.$extension;
        }
        $sdempats->mapel = $request->mapel;
        $sdempats->judul = $request->judul;
        $sdempats->videopel = $request->videopel;
        $sdempats->update();

        return redirect('/adminsd4');
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
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd4dokumen')->put($extension, File::get($cover));
            $sdsatus->dokumen = 'upload/dokumen/sd4/'.$extension;
        }

        $sdempats = new \App\Sdempat();
        $sdempats->mapel = $request->mapel;
        $sdempats->judul = $request->judul;
        $sdempats->videopel = 'upload/video/sd4/'.$request->videopel;
        $sdempats->dokumen = 'upload/dokumen/sd4/'.$extension;

        $sdempats->save();

        return redirect()->route('admin.sd4');
    }
}
