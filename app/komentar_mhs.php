<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar_mhs extends Model
{
    protected $table = "komentar_mhs";
    protected $guarded = [];

    public function mahasiswa_feed()
    {
        return $this->belongsTo('App\mahasiswa_feed');
    }
}
