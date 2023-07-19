<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\Picture;

class ArmadaController extends Controller
{
    public function index ()
    {
        $armadas = Armada::all();
        return view ('armadas.index',compact(['armadas']));
    }    
    
    public function create ()
    {
        return view ('armadas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'max_weight' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
        ]);


        $armada = Armada::create([
            'nama' => $request->nama,
            'max_weight' => $request->max_weight,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
        ]);

        foreach ($request->file('files') as $file){
            $filename = time().rand(1,200).'.'.$file->extension();
            $file->move(public_path('uploads'),$filename);
            Picture::create([
                'armada_id' => $armada->id,
                'filename' => $filename
            ]);
        }

        return redirect('/armada')->with('success','Data Armada Berhasil Ditambahkan.');
    }

    public function edit ($id)
    {
        $armada = Armada::find($id);
        return view ('armadas.edit',compact(['armada']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'max_weight' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
        ]);

        $armada = Armada::find($id);
        $armada->update([
            'nama' => $request->nama,
            'max_weight' => $request->max_weight,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
        ]);

        
        foreach ($request->file('files') as $file){
            $filename = time().rand(1,200).'.'.$file->extension();
            $file->move(public_path('uploads'),$filename);
            Picture::create([
                'armada_id' => $armada->id,
                'filename' => $filename
            ]);
        }

        return redirect('/armada')->with('success','Data Armada Berhasil Diedit.');
    }

    public function delete($id)
    {
        $armada = Armada::find($id);
        $armada->delete();
        return redirect('/armada')->with('success','Data Armada Berhasil Dihapus.');
    }
}

