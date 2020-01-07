<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_anggota_kelas extends Model
{
    
    protected $table = "detail_anggota_kelas";
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }
    
}
