<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table    ='mahasiswa';
    protected $fillable = ['user_id','npm','nama_mahasiswa','tgl_lahir','tempat_lahir','jenis_kelamin','hp','alamat'];
    public $timestamps  = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
