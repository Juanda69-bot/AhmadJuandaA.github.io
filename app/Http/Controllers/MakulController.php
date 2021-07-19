<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = makul::all(); //select * from makul
        return view ('makul.index', compact('makul') );
    }
    
    public function tambah()
    {
        return view ('makul.tambah');  
    }

    public function create(Request $request)
    {
        makul::create($request->all());
        toast('Data Mata Kuliah Berhasil Disimpan','success');
        return redirect('makul');  
    }

    public function edit($id)
    {
        $makul = makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = makul::find($id);
        $makul->update($request->all());
        toast('Data Mata Kuliah Berhasil Di Edit','success');
        return redirect('makul');
    }

    public function destroy($id)
    {
        $makul = makul::find($id);
        $makul ->delete();
        toast('Data Mata Kuliah Telah Di Hapus','info');
        return redirect('makul');
    }
}
