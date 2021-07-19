@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Nilai
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <form action="nilai"  method="POST" class="form-item">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                            <option value="" disabled selected>--Pilih Mahasiswa--</option>
                            @foreach($mahasiswa as $mhs)
                            <option value="{{$mhs->id}}">{{$mhs->nama_mahasiswa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Mata Kuliah</label>
                        <select name="makul_id" id="makul_id" class="form-control">
                            <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                            @foreach($makul as $mk)
                            <option value="{{$mk->id}}">{{$mk->nama_makul}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Nilai</label>
                        <input type="number" name="nilai" class="form-control col-md-3" id="nilai" placeholder="Masukkan Nilai">
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary float-center" name="simpan">SIMPAN</button>
                    <a href="mahasiswa"class="btn btn-danger float-center">BATAL</a>
                    </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
