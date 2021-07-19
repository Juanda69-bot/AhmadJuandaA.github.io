<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\makul;
use App\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['makul','mahasiswa'])->get(); // select * from mahasiswa
        return view ('nilai.index', compact('nilai') );
    }

    public function tambah()
    {
        $mahasiswa = mahasiswa::all();
        $makul = makul::all();
        
        return view ('nilai.tambah', compact('mahasiswa','makul'));
    }

    public function create(Request $request)
    {
        nilai::create($request->all());
        toast('Data Nilai Kuliah Berhasil Disimpan','success');
        return redirect('nilai'); 
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::all();
        $makul = makul::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('mahasiswa','makul','nilai'));
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Data Mata Kuliah Berhasil Di Edit','success');
        return redirect('nilai');
    }

    public function destroy($id)
    {
        $nilai = nilai::find($id);
        $nilai ->delete();
        toast('Data Mata Kuliah Telah Di Hapus','info');
        return redirect('nilai');
    }
}
