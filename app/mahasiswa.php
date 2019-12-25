<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $guarded = [''];

    // public function tb_feed()
    // {
    //     return $this->morphMany('App\tb_feed','users');
    // }

    public function tb_feed()
    {
        return $this->hasMany('App\tb_feed','users_id');
    }
    public function komentar()
    {
        return $this->hasMany('App\komentar','users_id');
    }
    public function like()
    {
        return $this->hasMany('App\like');
    }
}
