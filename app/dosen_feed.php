<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_feed extends Model
{
    protected $table = "dosen_feed";
    protected $guarded = [];

    public function Dosen()
    {
        return $this->belongsTo('App\Dosen');
    }
    public function komentar_dosen()
    {
        return $this->hasMany('App\komentar_dosen');
    }
}
