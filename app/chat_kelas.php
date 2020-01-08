<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat_kelas extends Model
{
    protected $table = "chat_kelas";
    protected $guarded = [];
    
    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa');
    }

    public function dosen()
    {
        return $this->belongsTo('App\dosen');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    


}
