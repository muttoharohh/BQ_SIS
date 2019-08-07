<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SmpduasController extends Controller
{
    public function index()
    {
        $smpduas = \App\Smpdua::all();

        return view('smp2', compact('smpduas'));
    }


    
    public function smpdua_viewadmin(){
        $smpduas = \App\Smpdua::all();
        return view('admin.smp.smp2crud', compact('smpduas'));
    }

    public function delete($id){
        $smpduas = \App\Smpdua::find($id);
        $smpduas->delete($id);
        return redirect()->route('admin.smp2');
    }

    public function edit($id){
        $smpduas = \App\Smpdua::find($id);
        return view('admin.smp.smp2edit', compact('smpduas'));
    }

    public function update(Request $request, $id){
        $smpduas = \App\Smpdua::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp2dokumen')->put($extension, File::get($cover));
            $smpduas->dokumen = 'upload/dokumen/sd2/'.$extension;
        }
        $smpduas->mapel = $request->mapel;
        $smpduas->judul = $request->judul;
        $smpduas->videopel = 'upload/video/smp2/'.$request->videopel;
        $smpduas->dokumen = 'upload/dokumen/smp2/'.$extension;
        $smpduas->update();

        return redirect('/adminsmp2');
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
        $smpduas = new \App\Smpdua();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('smp2dokumen')->put($extension, File::get($cover));
            $smpduas->dokumen = 'upload/dokumen/smp2/'.$extension;
        }

        $smpduas->mapel = $request->mapel;
        $smpduas->judul = $request->judul;
        $smpduas->videopel = 'upload/video/smp2/'.$request->videopel;

        $smpduas->save();

        return redirect()->route('admin.smp2');
    }


}
