<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = "dosen";
    protected $guarded = [''];
    

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function dosen_feed()
    {
        return $this->hasMany('App\Dosen_feed');
    }
}
