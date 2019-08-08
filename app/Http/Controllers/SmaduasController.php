<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class SmaduasController extends Controller
{
    public function index()
    {
        $smaduas = \App\Smadua::all();

        return view('sma2', compact('smaduas'));
    }

    public function smadua_viewadmin(){
        $smaduas = \App\Smadua::all();
        return view('admin.sma.sma2crud', compact('smaduas'));
    }

    public function delete($id){
        $smaduas = \App\Smadua::find($id);
        $smaduas->delete($id);
        return redirect()->route('admin.sma2');
    }

    public function edit($id){
        $smaduas = \App\Smadua::find($id);
        return view('admin.sma.sma2edit', compact('smaduas'));
    }

    public function update(Request $request, $id){
        $smaduas = \App\Smadua::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma2dokumen')->put($extension, File::get($cover));
            $smaduas->dokumen = 'upload/dokumen/sma2/'.$extension;
        }
        $smaduas->mapel = $request->mapel;
        $smaduas->judul = $request->judul;
        $smaduas->videopel = 'upload/video/sma2/'.$request->videopel;
        $smaduas->update();

        return redirect('/adminsma2');
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
        $smaduas = new \App\Smadua();
        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sma2dokumen')->put($extension, File::get($cover));
            $smaduas->dokumen = 'upload/dokumen/sma2/'.$extension;
        }

        $smaduas->mapel = $request->mapel;
        $smaduas->judul = $request->judul;
        if($request->videopel != ""){
            $smaduas->videopel = 'upload/video/sma2/'.$request->videopel;
        }

        $smaduas->save();

        return redirect()->route('admin.sma2');
    }
}
