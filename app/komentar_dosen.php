<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar_dosen extends Model
{
    protected $table = "komentar_dosen";
    protected $guarded = [];

    public function dosen_feed()
    {
        return $this->belongsTo('App\dosen_feed');
    }
}
