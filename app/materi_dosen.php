<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi_dosen extends Model
{
    protected $table = "materi_dosen";
    protected $guarded = [''];

    public function dosen()
    {
        return $this->belongsTo('App\dosen','dosen_id');
    }
    public function kelas()
    {
        return $this->belongsTo('App\kelas','kelas_id');
    }

}
