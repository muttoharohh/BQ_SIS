<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SdduasController extends Controller
{
    public function index()
    {
        $sdduas = \App\Sddua::all();

        return view('sd2', compact('sdduas'));
    }

    public function sddua_viewadmin(){
        $sdduas = \App\Sddua::all();
        return view('admin.sd.sd2crud', compact('sdduas'));
    }

    public function delete($id){
        $sdduas = \App\Sddua::find($id);
        $sdduas->delete($id);
        return redirect()->route('admin.sd2');
    }

    public function edit($id){
        $sdduas = \App\Sddua::find($id);
        return view('admin.sd.sd2edit', compact('sdduas'));
    }

    public function update(Request $request, $id){
        $sdduas = \App\Sddua::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd2dokumen')->put($extension, File::get($cover));
            $sdduas->dokumen = 'upload/dokumen/sd2/'.$extension;
        }
        $sdduas->mapel = $request->mapel;
        $sdduas->judul = $request->judul;
        $sdduas->videopel = 'upload/video/sd2/'.$request->videopel;
        $sdduas->dokumen = 'upload/dokumen/sd2/'.$extension;
        $sdduas->update();

        return redirect('/adminsd2');
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
        $sdduas = new \App\Sddua();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd2dokumen')->put($extension, File::get($cover));
            $sdduas->dokumen = 'upload/dokumen/sd2/'.$extension;
        }

        $sdduas->mapel = $request->mapel;
        $sdduas->judul = $request->judul;
        $sdduas->videopel = 'upload/video/sd2/'.$request->videopel;

        $sdduas->save();

        return redirect()->route('admin.sd2');
    }
}
