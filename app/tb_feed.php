<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_feed extends Model
{
    protected $table = "tb_feed";
    protected $guarded = [''];
    

    // public function users()
    // {
    //     return $this->morphTo();
    // }
    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa','users_id');
    }
    public function dosen()
    {
        return $this->belongsTo('App\dosen','users_id');
    }

    
    public function komentar()
    {
        return $this->hasMany('App\komentar');
    }
}
