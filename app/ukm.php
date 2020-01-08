<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ukm extends Model
{
    protected $table = "ukm";
    protected $guarded = [''];
    
    public function komentar()
    {
        return $this->hasMany('App\komentar','tb_feed_id');
    }

    public function like()
    {
        return $this->hasMany('App\like','tb_feed_id');
    }

    public function data_angota_ukm()
    {
        return $this->hasMany('App\data_angota_ukm','mahasiswa_id','id');
    }

    public function chat_ukm()
    {
        return $this->hasMany('App\chat_ukm','ukm_id','id');
    }


}
