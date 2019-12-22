<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa_feed extends Model
{
    protected $table = "mahasiswa_feed";
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa');
    }
    public function komentar_mhs()
    {
        return $this->hasMany('App\komentar_mhs');
    }
}
