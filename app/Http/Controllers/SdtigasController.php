<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;
class SdtigasController extends Controller
{
    public function index()
    {
        $sdtigas = \App\Sdtiga::all();

        return view('sd3', compact('sdtigas'));
    }

    public function sdtiga_viewadmin(){
        $sdtigas = \App\Sdtiga::all();
        return view('admin.sd.sd3crud', compact('sdtigas'));
    }

    public function delete($id){
        $sdtigas = \App\Sdtiga::find($id);
        $sdtigas->delete($id);
        return redirect()->route('admin.sd3');
    }

    public function edit($id){
        $sdtigas = \App\Sdtiga::find($id);
        return view('admin.sd.sd3edit', compact('sdtigas'));
    }

    public function update(Request $request, $id){
        $sdtigas = \App\Sdtiga::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd3dokumen')->put($extension, File::get($cover));
            $sdtigas->dokumen = 'upload/dokumen/sd3/'.$extension;
        }
        $sdtigas->mapel = $request->mapel;
        $sdtigas->judul = $request->judul;
        $sdtigas->videopel = 'upload/video/sd3/'.$request->videopel;
        $sdtigas->dokumen = 'upload/dokumen/sd3/'.$extension;
        $sdtigas->update();

        return redirect('/adminsd3');
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
            Storage::disk('sd3dokumen')->put($extension, File::get($cover));
            $sdtigas->dokumen = 'upload/dokumen/sd3/'.$extension;
        }

        $sdtigas = new \App\Sdtiga();
        $sdtigas->mapel = $request->mapel;
        $sdtigas->judul = $request->judul;
        $sdtigas->videopel = 'upload/video/sd3'.$request->videopel;

        $sdtigas->save();

        return redirect()->route('admin.sd3');
    }
}
