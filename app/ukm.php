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
}
