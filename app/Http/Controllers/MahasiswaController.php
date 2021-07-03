<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
       $mahasiswa = mahasiswa::all();
       return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function save(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
     $mahasiswa = mahasiswa::find($id);
     return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('mahasiswa');

    }
}
