<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_feed extends Model
{
    protected $table = "dosen_feed";

    public function dosen1()
    {
        return $this->belongsTo('App\Dosen');
    }
}
