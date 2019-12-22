<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $guarded = [''];

    public function mahasiswa_feed()
    {
        return $this->hasMany('App\mahasiswa_feed');
    }
}
