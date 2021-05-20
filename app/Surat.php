<?php

namespace App;
use App\User;
use App\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $guarded = [];
    
    public function jenis_surat() {
        return $this->belongsTo('App\JenisSurat', 'id_jenis_surat');
    }
    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }



   
}
