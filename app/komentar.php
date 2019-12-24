<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = "komentar";
    protected $guarded = [''];

    public function tb_feed()
    {
        return $this->belongsTo('App\tb_feed');
    }


    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa','users_id');
    }
    public function dosen()
    {
        return $this->belongsTo('App\dosen','users_id');
    }
}
