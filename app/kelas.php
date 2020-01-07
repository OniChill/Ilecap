<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = "kelas";
    protected $guarded = [''];

    public function dosen()
    {
        return $this->belongsTo('App\dosen');
    }
    
    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa');
    }

    public function anggota_kelas()
    {
        return $this->hasMany('App\komentar_dosen','users_id','id');
    }
    public function materi_dosen()
    {
        return $this->hasMany('App\materi_dosen','kelas_id','id');
    }
}
