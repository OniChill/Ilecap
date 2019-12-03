<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = "dosen";
    protected $primaryKey = 'id_dosen';
    protected $guarded = ['id_dosen'];
    

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function dosen_feed()
    {
        return $this->hasMany('App\Dosen_feed');
    }
}
