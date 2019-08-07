<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Auth;
use Illuminate\Http\Request;

class SdlimasController extends Controller
{
    public function index()
    {
        $sdlimas = \App\Sdlima::all();

        return view('sd5', compact('sdlimas'));
    }
    public function sdlima_viewadmin(){
        $sdlimas = \App\Sdlima::all();
        return view('admin.sd.sd5crud', compact('sdlimas'));
    }

    public function delete($id){
        $sdlimas = \App\Sdlima::find($id);
        $sdlimas->delete($id);
        return redirect()->route('admin.sd5');
    }

    public function edit($id){
        $sdlimas = \App\Sdlima::find($id);
        return view('admin.sd.sd5edit', compact('sdlimas'));
    }

    public function update(Request $request, $id){
        $sdlimas = \App\Sdlima::find($id);

        $cover = $request->file('dokumen');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('sd5dokumen')->put($extension, File::get($cover));
            $sdlimas->dokumen = 'upload/dokumen/sd5/'.$extension;
        }
        $sdlimas->mapel = $request->mapel;
        $sdlimas->judul = $request->judul;
        $sdlimas->videopel = 'upload/video/sd5/'.$request->videopel;
        $sdlimas->dokumen = 'upload/dokumen/sd5/'.$extension;
        $sdlimas->update();

        return redirect('/adminsd5');
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
            Storage::disk('sd5dokumen')->put($extension, File::get($cover));
            $sdsatus->dokumen = 'upload/dokumen/sd5/'.$extension;
        }

        $sdlimas = new \App\Sdlima();
        $sdlimas->mapel = $request->mapel;
        $sdlimas->judul = $request->judul;
        $sdlimas->videopel = 'upload/video/sd5/'.$request->videopel;
        $sdlimas->dokumen = 'upload/dokumen/sd5/'.$extension;

        $sdlimas->save();

        return redirect()->route('admin.sd5');
    }
}
