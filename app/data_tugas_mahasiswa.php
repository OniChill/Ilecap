<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_tugas_mahasiswa extends Model
{
    protected $table = "data_tugas_mahasiswa";
    protected $guarded = [];
    protected $primaryKey ='id_tugas';

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }
    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa');
    }
    public function tugas_dosen()
    {
        return $this->belongsTo('App\tugas_dosen');
    }
}
