<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = "dosen";
    protected $guarded = [''];
    

    public function kelas()
    {
        return $this->hasMany('App\kelas','user_id','id');
    }
      public function tb_feed()
    {
        return $this->hasMany('App\tb_feed','users_id','id');
    }
    public function komentar()
    {
        return $this->hasMany('App\komentar','users_id','id');
    }
    public function tugas_dosen()
    {
        return $this->hasMany('App\tugas_dosen','dosen_id','id');
    }
    
    public function materi_dosen()
    {
        return $this->hasMany('App\materi_dosen','dosen_id','id');
    }

    public function chat_kelas()
    {
        return $this->hasMany('App\chat_kelas','user_id','id');
    }
    public function like()
    {
        return $this->hasMany('App\like','users_id');
    }
}
