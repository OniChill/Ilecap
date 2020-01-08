<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat_ukm extends Model
{
    protected $table = "chat_ukm";
    protected $guarded = [];

    public function data_angota_ukm()
    {
        return $this->belongsTo('App\data_angota_ukm');
    }
    public function ukm()
    {
        return $this->belongsTo('App\ukm');
    }
}
