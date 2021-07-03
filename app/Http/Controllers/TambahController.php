<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

class TambahController extends Controller
{
    
    public function tambahdata()
    {

        return view('mahasiswa.tambah');
        
    }
}
