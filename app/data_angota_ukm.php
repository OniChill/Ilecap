<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_angota_ukm extends Model
{
    protected $table = "data_angota_ukm";
    protected $guarded = [];

    public function ukm()
    {
        return $this->belongsTo('App\ukm');
    }

    public function chat_ukm()
    {
        return $this->hasMany('App\chat_ukm','anggot_id','id');
    }
}
